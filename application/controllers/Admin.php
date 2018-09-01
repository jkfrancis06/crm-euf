<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Admin extends REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
            parent::__construct();
            $this->load->model('DAO/User_dao','userDAO',TRUE);
            $this->load->model('DAO/Profil_dao','profilDAO',TRUE);
            $this->load->model('DAO/Session_dao','sessionDAO',TRUE);
            $this->load->helper('string');
            $this->load->helper('access_helper');
            $this->load->helper('notif_helper');
          
            //$this->load->library('access_mng');

	}
	
        
        public function login_post(){
            $result = FALSE;
            $login = $this->post('login');
            $password = $this->post('password');
            if($login == NULL || $password == NULL){
                $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
            }
            //On recupère les données utilisateurs
            $user = $this->userDAO->listUserByUsername($login);
            $valeur = NULL;
            if(count($user) > 0) $valeur = $user[0];
            if($valeur == NULL){
                // Pas de login
                $info = "Ce login n'existe pas !";
                
            }else{
                // Verfication du mot de passe
                if($this->userDAO->cryptPass($password)!=$valeur->c_mdp){
                    $info = "Votre mot de passe est incorrect !";
                }else {
                    // On met à jour la date de connexion
                    $user = new stdClass();
                    $user->login = $login;
                    $user->date_con = date("Y-m-d H:i:s");
                    $this->userDAO->editUserByConnect($user);
                    $result = TRUE; 
                    $profil = $valeur->c_id_pro;
                    // On recupere tout les modules
                    $modules = $this->profilDAO->listSelectedModules($profil);
                    $menu = array();
                    $sous_menu = array();
                    $droit = array();
                    foreach ($modules as $mod){
                        $index = $mod->c_index;
               
                        array_push($droit, $index);

                    }
                                       
                }
            }
  
            if($result!=FALSE){ 
                //On genère le token
                $token = random_string('alnum', 8);
                //On vide tout d'abord toute session concernant cet utilisateur
                $this->sessionDAO->deleteSessionByUser($valeur->c_id);
                //On enregistre le token de l'utilisateur dans une table temporaire
                $session = new stdClass();
                $session->c_token = $token;
                $session->c_user_id = $valeur->c_id;
                //$session->c_date_create = date("Y:m")
                $this->sessionDAO->addSession($session);
                if($valeur->c_statut == 0){
                    $this->set_response(array("request"=>"login",
                        "result"=>1,
                        "token"=>$token,
                        "user"=>$valeur,
                        "must_change_password"=>1,
                        "comment"=>"Modification de mot de passe requis"), REST_Controller::HTTP_PARTIAL_CONTENT);
                }elseif($valeur->c_statut == 1){
                    $this->set_response(array("request"=>"login",
                        "result"=>1,
                        "token"=>$token,
                        "user"=>$valeur,  
                        "droit" => $droit,
                        "must_change_password"=>0,
                        "comment"=>"Authentification avec succès! "), REST_Controller::HTTP_OK);
                    
                }else{
                    $this->set_response(array("request"=>"login",
                        "result"=>0,
                        "comment"=>"Utilisateur desactivé"), REST_Controller::HTTP_FORBIDDEN);  
                }
                
                
            }else{
                $this->set_response(array("request"=>"login",
                    "result"=>0,
                    "comment"=>$info), REST_Controller::HTTP_OK);    
            }
           
           
            
            
        }
        
      
        public function user_list_post(){
            $token = $this->post("token");
            $rep = check_token($token,"admin_user_add");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, $rep->code);
            }else{
                //On list tout les utilisateurs
                $users = $this->userDAO->listAllUsers();
                $this->set_response(array("request"=>"user_list",
                        "result"=>1,
                        "token"=>$token,
                        "users"=>$users,  
                          ), REST_Controller::HTTP_OK);
            }
        }
        public function user_delete_post(){
            $token = $this->post("token");
            $user_id = $this->post("user_id");
            $rep = check_token($token,"admin_user");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, REST_Controller::HTTP_OK);
            }else{
                //On supprime l'utilisateur
                $this->userDAO->deleteUser($user_id);
                $this->set_response(array("request"=>"user_delete",
                        "result"=>1,
                        "token"=>$token,
                        "comment"=>"Requete de suppression executée avec succès!",  
                    ), REST_Controller::HTTP_OK);
            }
        }
        
        public function user_add_post(){
            
            $token = $this->post("token");
            $rep = check_token($token,"admin_user_add");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, $rep->code);
            }else{
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nom', 'nom', 'required');
                $this->form_validation->set_rules('prenom', 'prenom', 'required');
                $this->form_validation->set_rules('mail', 'mail', 'required');
                $this->form_validation->set_rules('tel', 'tel',array('required', 'min_length[7]'));
                $this->form_validation->set_rules('mail', 'mail', 'required|valid_email');
                $this->form_validation->set_rules('isClient', 'isClient', 'required');
                
                if ($this->form_validation->run() == FALSE)
                {
                    $this->set_response(array("request"=>"user_add",
                        "result"=>0,
                        "token"=>$token,
                        "comment"=>"Plusieurs parametres manquants",  
                    ), REST_Controller::HTTP_BAD_REQUEST);
                }
                else
                {
                    $user = new stdClass();
                    $user->nom = $this->post("nom");
                    $user->prenom = $this->post("prenom");
                    $user->adresse = $this->post("mail");
                    $user->login = $this->post("mail");
                    $user->tel = $this->post("tel");
                    $isClient = $this->post("isClient");
                    $verif= true;
                    if($isClient == 1){
                        
                        $client_id = $this->post("client_id");
                        if($client_id == NULL){
                            $verif = FALSE;
                            $this->set_response(array("request"=>"user_add",
                                "result"=>0,
                                "token"=>$token,
                                "comment"=>"Veuillez specifier le client",  
                            ), REST_Controller::HTTP_BAD_REQUEST);
                        }else{
                            $profil_id = 0;
                        }
                        
                    }else{
                      // echo "session porifl";
                        if(empty($this->post("profil_id"))){
                            $verif = FALSE;
                            $this->set_response(array("request"=>"user_add",
                                "result"=>0,
                                "token"=>$token,
                                "comment"=>"Veuillez specifier le profil de l'utilisateur",  
                            ), REST_Controller::HTTP_BAD_REQUEST);
                            
                        } else {
                            $profil_id = $this->post("profil_id");
                        }
                         
                    } // Fin if isCLient
                    if($verif == true){
                        $notif_mdp= random_string('alnum', 10);
                        $user->mdp = $this->userDAO->cryptPass($notif_mdp);
                        $user->id_pro = $profil_id;
                        $user_id = $this->userDAO->addUser($user);

                        if($profil_id == 0){
                            //On ajoute l'association client - utilisateur
                            $this->usertoclientDAO->addUserToClient($client_id,$user_id);
                        }

                        // On fait la notification mail 
                        notify_password($user->adresse,$notif_mdp,$user->adresse);
                        $user->id = $user_id;
                        $users = $this->userDAO->listUserById($user->id);
                        $user = $users[0];

                        $this->set_response(array("request"=>"user_add",
                            "result"=>1,
                            "token"=>$token,
                            "user" => $user,
                            "comment"=>"Requete d'ajout executée avec succès!",  
                        ), REST_Controller::HTTP_OK);
                    } // Fin  if($verif == true)
                    
                } // Fin formvalidation run
    
            } // Fin Check token result
        }
        
        public function change_password_post(){
            $token = $this->post("token");
            $rep = check_token($token,"");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, $rep->code);
            }else{
                  $this->load->library('form_validation');
                $this->form_validation->set_rules('user_id', 'user_id', 'required');
                $this->form_validation->set_rules('old_password', 'old_password', 'required');
                $this->form_validation->set_rules('new_password', 'new_password',array('required', 'min_length[6]'));
                $this->form_validation->set_rules('isActive', 'isActive', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->set_response(array("request"=>"change_password",
                        "result"=>0,
                        "token"=>$token,
                        "valeurs"=>$_POST,
                        "comment"=>"Plusieurs parametres manquants",  
                    ), REST_Controller::HTTP_BAD_REQUEST);
                }else{
                    $user = new stdClass();
                    $user->id = $this->post("user_id");
                    $users = $this->userDAO->listUserById($user->id);
                    if(count($users) > 0){
                        $user = $users[0];
                        $old_password = $this->post("old_password");
                        if($this->userDAO->cryptPass($old_password) == $user->c_mdp){
                            //On fait l'edition du nouveau mot de passe
                            $user->c_mdp = $this->userDAO->cryptPass($this->post("new_password"));
                            $isActive =  $this->post("isActive");
                            if($isActive == 1){
                                //On active le compte
                                $this->userDAO->editUserByMdpAct($user);
                            }else{
                                // On modifie simplement le mot de passe
                                $this->userDAO->editUserByMdp($user);
                            } // Fin if isActive
                            
                            $users = $this->userDAO->listUserById($user->c_id)[0];
                            $this->set_response(array("request"=>"change_password",
                                "result"=>1,
                                "token"=>$token,
                                "user" => $user,
                                "comment"=>"Modification de mot de passe effectuée avec succès!",  
                            ), REST_Controller::HTTP_OK);
                            
                            
                        }else{
                            $this->set_response(array("request"=>"change_password",
                                "result"=>0,
                                "token"=>$token,
                                "comment"=>"Ancien mot de passe erronné!",  
                            ), REST_Controller::HTTP_BAD_REQUEST);
                        } // Fin if $this->userDAO->cryptPass($old_password) == $user->c_mdp
                    }else{
                        $this->set_response(array("request"=>"change_password",
                            "result"=>0,
                            "token"=>$token,
                            "comment"=>"User_id erronné!",  
                        ), REST_Controller::HTTP_BAD_REQUEST);
                    } // Fin count users
                    
                }//Fin form validation
            }// FIn Check_token
        }
        public function user_edit_post(){
            $token = $this->post("token");
            
            $rep = check_token($token,"admin_user_edit");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, $rep->code);
            }else{
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nom', 'nom', 'required');
                $this->form_validation->set_rules('prenom', 'prenom', 'required');
               
              //  $this->form_validation->set_rules('tel', 'tel',array('required', 'min_length[7]'));
                
                $this->form_validation->set_rules('profil_id', 'profil_id', 'required');
                $this->form_validation->set_rules('user_id', 'user_id', 'required');
                $this->form_validation->set_rules('isReset', 'isReset', 'required');
                
                
                if ($this->form_validation->run() == FALSE)
                {
                    $this->set_response(array("request"=>"user_edit",
                        "result"=>0,
                        "token"=>$token,
                        "error"=> validation_errors(),
                        "comment"=>"Plusieurs parametres manquants",  
                    ), REST_Controller::HTTP_BAD_REQUEST);
                }
                else
                {
                    $user = new stdClass();
                    $user->nom = $this->post("nom");
                    $user->prenom = $this->post("prenom");
                    $user->tel = $this->post("tel");
                    $user->id = $this->post("user_id");
                    //$user->adresse = $this->post("mail");
                    $user->id_pro = $this->post("profil_id");
                    $isReset = $this->post("isReset");
                    
                    $supp = "";
                    if($isReset == 1){
                        $notif_mdp= random_string('alnum', 10);
                        $user->mdp = $this->userDAO->cryptPass($notif_mdp);
                        $supp = " et re-édition de mot de passe";
                    }   
                    $this->userDAO->editAllUser($user);
                    // On fait la notification mail 
                    $users = $this->userDAO->listUserById($user->id);
                    $user = $users[0];
                    if($notif_mdp) notify_password($user->adresse,$notif_mdp,$user->adresse);

                    $this->set_response(array("request"=>"user_edit",
                        "result"=>1,
                        "token"=>$token,
                        "user" => $user,
                        "comment"=>"Requete d'edition d'utilisateur $supp executée avec succès!",  
                    ), REST_Controller::HTTP_OK);
                   
                    
                } // Fin formvalidation run
    
            } // Fin Check token result
        }
        
        public function profil_list_post(){
            $token = $this->post("token");
            $rep = check_token($token,"admin_profil_add");
            if($rep->rs == FALSE){
                $this->set_response($rep->data, $rep->code);
            }else{
                //On list tout les utilisateurs
                $profils = $this->profilDAO->listAllProfil();
                $this->set_response(array("request"=>"profil_list",
                        "result"=>1,
                        "token"=>$token,
                        "profil"=>$profils ,  
                          ), REST_Controller::HTTP_OK);
            }// Fin check token
        }
        
        public function profil_add_post(){
            
        }
        
        public function profil_edit_post(){
            
        }
        
        public function profil_delete_post(){
            
        }
        
        public function add_module_post(){
            
        }
        
        public function delete_module_post(){
            
        }

}


