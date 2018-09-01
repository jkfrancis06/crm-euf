<?php
function check_token($token, $droit){
    $CI = get_instance();
    $rs = $CI->sessionDAO->listSessionByToken($token);
    $rep = new stdClass();
    $rep->rs = TRUE;
    $rep->data = array();
    $rep->code = 200;
    if(count($rs) == 0){
        $rep->rs = FALSE;
        $rep->data = array("request"=>"login",
            "result"=>0,
            "comment" => "Session expirée");
        $rep->code = 401;
    } else { 
        $obj = $rs[0];
        //verfication de la durée de session
        $now_obj= new DateTime("now"); 
        $now = $now_obj->getTimestamp();
        $last_session_obj= new DateTime("{$obj->c_date_update}");
        
        $last_session = $last_session_obj->getTimestamp();
        $interval = $now  - $last_session;
        $seuil = SESSION_DURATION * 60;
        if($interval > $seuil){
           $rep->rs = FALSE;
           $rep->data = array("request"=>"login",
                "result"=>0,
                "comment" => "Session expirée ");
            $rep->code = 401;
        } else {
            $CI->sessionDAO->updateSession($token);
            $user = $CI->userDAO->listUserById($obj->c_user_id)[0];
            $profil = $user->c_id_pro;
            // On recupere tout les modules
            $if_r = FALSE;
            if($droit == ""){
                $if_r = TRUE;
            }else{
                $modules = $CI->profilDAO->listSelectedModules($profil);
                foreach ($modules as $mod){
                    $index = $mod->c_index;
                    if($droit == $index){
                        $if_r = TRUE;  
                        break;
                    }
                }
            }
            
            if($if_r == FALSE){
                $rep->rs = FALSE;
                $rep->data = array("request"=>"droit",
                     "result"=>0,
                     "comment" => "Vous n'avez pas les droits necessaires ",
                     );
                $rep->code = 403;
            }
             
              
        }
        
    }
    
    return $rep;
}



