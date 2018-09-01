<?php

Class User_dao extends CI_Model
{
    protected $table_name ='t_user';
    
    function listAllUsers(){
//        $query = $this->db->get($this->table_name);
//        return $query->result();
        
        $this->db->select('t_user.c_id,'
                . 't_user.c_nom,'
                . 't_user.c_prenom,'
                . 't_user.c_tel,'
                . 't_user.c_login,'
                . 't_user.c_statut,'
                . 't_user.c_date_con, '
                . 't_user.c_date_mod, '
                
                . 't_user_profil.c_libelle');
        $this->db->from('t_user');
        $this->db->join('t_user_profil', 't_user.c_id_pro= t_user_profil.c_id');
        //$this->db->where("t_schedule_sub.c_date", $date);
        $query = $this->db->get();
        return $query->result();
    }
    
    function listUserById($id){
       $query = $this->db->get_where($this->table_name, array('c_id' => $id));
       return $query->result();
    }
    function listUserByProfil($id){
       
       $query = $this->db->get_where($this->table_name, array('c_id_pro' => $id));
       return $query->result();
    }
    function listUserByUsername($user){
       $query = $this->db->get_where($this->table_name, array('c_login' => $user));
       return $query->result();
    }
    function listUserByTel($user){
       $query = $this->db->get_where($this->table_name, array('c_tel' => $user));
       return $query->result();
    }
    function  listUserByActiveUsername($user){
       $this->db->where('c_login', $user);
       $this->db->where('c_statut', 1);
       $query = $this->db->get($this->table_name);
       return $query->result();
    }
    
    function addUser($user){
        $data = array(
            'c_login' => $user->login ,
            'c_mdp' => $user->mdp ,
            'c_nom' => $user->nom ,
            'c_prenom' => $user->prenom ,
            'c_tel' => $user->tel ,
            'c_adresse' => $user->adresse ,
            'c_statut' => 0 ,
            'c_date_con' => NULL ,
            'c_date_mod' => NULL,
            'c_date_cre' => date("Y:m:d H:i:s") ,
            'c_id_pro' => $user->id_pro,
            
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function editUserByMdp($user){
        $data = array(
          
           
            'c_mdp' => $user->mdp ,
            'c_date_mod' => date ("Y:m:d h:i:s"), 
            
        );
        $this->db->where('c_id', $user->id);
        $this->db->update($this->table_name, $data); 
    }
    
    function editUserByMdpAct($user){
        $data = array(
          
            'c_statut'=>1,
            'c_mdp' => $user->c_mdp ,
            'c_date_mod' => date ("Y:m:d h:i:s"), 
            
        );
        $this->db->where('c_id', $user->c_id);
        $this->db->update($this->table_name, $data); 
    }
	
    function editAllUser($user){
        if(isset($user->mdp)){
            $data = array(
                'c_nom' => $user->nom ,
                'c_prenom' => $user->prenom ,
                'c_tel'=>$user->tel,
                'c_id_pro' => $user->id_pro,
                'c_mdp' => $user->mdp,  
                'c_date_mod' => date ("Y:m:d h:i:s"), 
                );
        }else{
            $data = array(
                'c_nom' => $user->nom ,
                'c_prenom' => $user->prenom ,
                'c_tel'=>$user->tel,
                'c_id_pro' => $user->id_pro,
                'c_date_mod' => date ("Y:m:d h:i:s"), 

            );
        }
        
        $this->db->where('c_id', $user->id);
        $this->db->update($this->table_name, $data); 
    }
	
	function editAllPwdUser($user){
        $data = array(
            'c_nom' => $user->nom ,
			'c_prenom' => $user->prenom ,
            'c_mdp' => $user->mdp,			
			 'c_id_pro' => $user->id_pro,
            'c_date_mod' => date ("Y:m:d h:i:s"), 
            
        );
        $this->db->where('c_id', $user->id);
        $this->db->update($this->table_name, $data); 
    }
    
    function editUserByProfil($user){
        $data = array(
            'c_id_pro' => $user->id_pro,
            'c_date_mod' => date ("Y:m:d h:i:s"), 
            
        );
        $this->db->where('c_id', $user->id);
        $this->db->update($this->table_name, $data); 
    }
    
    function editUserByStatus($user){
        $data = array(
              'c_statut' => $user->statut ,
            'c_date_mod' => date ("Y:m:d h:i:s"), 
            
        );
        $this->db->where('c_id', $user->id);
        $this->db->update($this->table_name, $data); 
    }
	
	
	function editUserByConnect($user){
        $data = array(
            //  'c_statut' => $user->statut ,
            'c_date_con' => $user->date_con,
            
        );
        $this->db->where('c_login', $user->login);
        $this->db->update($this->table_name, $data); 
    }
    
            
    function deleteUser($user){
        $this->db->where('c_id', $user->id);
        $this->db->delete($this->table_name); 
    }
    
    function cryptPass($pass){
        $key= "Wancia";
        $hash_code = crypt($pass,$key);
        return $hash_code;
    }
    
    

}