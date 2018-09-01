<?php

Class Profil_has_module_dao extends CI_Model
{
    protected $table_name ='t_profil_has_module';
    
    function listAllModule($profil){
        $query = $this->db->get_where($this->table_name, array('c_id_pro' => $profil));
        return $query;
        
    }
    
    function addModuleToProfil($profil,$module){
        $data = array(
            'c_id_mod' => $module ,
            'c_id_pro'=> $profil
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function deleteModuleToProfil($profil,$module){
        $this->db->where('c_id_pro', $profil);
        $this->db->where('c_id_mod', $module);
        $this->db->delete($this->table_name); 
    }
    
    function deleteAllModuleToProfil($profil){
        $this->db->where('c_id_pro', $profil);
        $this->db->delete($this->table_name); 
    }
    
    
    

}