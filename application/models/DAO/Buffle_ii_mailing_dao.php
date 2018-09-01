<?php

Class Buffle_ii_mailing_dao extends CI_Model
{
    protected $table_name ='t_mailing_list_buffle_II';
    
    function listAllContact(){
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
   
   
    
    
    

}