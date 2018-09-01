<?php

Class Buffle_ii_state_dao extends CI_Model
{
    protected $table_name ='t_state_alert_buffle_II';
    
    function listAllState(){
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    function listState($notif_typ,$equipement,$etat,$date){
        $query = $this->db->get_where($this->table_name, array('c_notif_typ' => $notif_typ,
            'c_equipement' => $equipement,
            'c_etat' => $etat,
            'c_date' => $date));
        return $query->result();
    }
   
   
    function save_state($message,$notif_typ,$equipement,$etat,$date){
         $data = array(
           //'c_id'=>$abonne->id,
           'c_message'=>$message,
           'c_notif_typ'=>$notif_typ,
           'c_equipement'=>$equipement,
           'c_etat' => $etat,
             'c_date' => $date,
             'c_date_ajout' => date("Y:m:d H:i:s")
                
            
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
            
   
 
    function updateGest($abonne,$gest){
        $data = array(
      
           'c_gestionnaire'=>$gest,
           //'c_date_ins'=>$abonne->date_ins,
           //'c_date_cre'=>$abonne->date_cre,
           'c_date_mod'=> date("Y-m-d H:i:s"),
            
        );
       
        $this->db->where('c_id', $abonne);
        $this->db->update($this->table_name, $data); 
    }
   
    
    function editAllAbonne($abonne){
        $data = array(
           //'c_id'=>$abonne->id,
           'c_nom'=>$abonne->nom,
           'c_prenom'=>$abonne->prenom,
           'c_tel'=>$abonne->tel,
           'c_mail'=>$abonne->mail,
           'c_profil_id'=>$abonne->profil_id,
             'c_ville'=>$abonne->ville,
           'c_quartier'=>$abonne->quartier,
           //'c_su'=>$abonne->su,
           //'c_modem'=>$abonne->modem,
          
           //'c_date_ins'=>$abonne->date_ins,
           //'c_date_cre'=>$abonne->date_cre,
           'c_date_mod'=> date("Y-m-d H:i:s"),
            
        );
      //  print_r($abonne);
        
        $this->db->where('c_id', $abonne->id);
        $this->db->update($this->table_name, $data); 
    }
    
  
    function deleteAbonne($abonne){
        $this->db->where('c_id', $abonne->id);
        $this->db->delete($this->table_name); 
    }
    
   
    
    
    

}