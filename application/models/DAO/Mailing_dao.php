<?php

Class Mailing_dao extends CI_Model
{
    protected $table_name_buffle ='t_mailing_list_buffle_II';
    protected $table_name_gazelle ='t_mailing_list_gazelle';
    
    function listAllContactBuffle(){
        $query = $this->db->get($this->table_name_buffle);
        return $query->result();
    }
    
    function listAllContactGazelle(){
        $query = $this->db->get($this->table_name_gazelle);
        return $query->result();
    }
    
    function listReportGazelle(){
        $query = $this->db->get_where($this->table_name_gazelle,array("c_rapport"=>'1'));
        return $query->result();
    }
    function listInsGazelle(){
        $query = $this->db->get_where($this->table_name_gazelle,array("c_notif_ins_d"=>'1'));
        return $query->result();
    }
   
    
    
    

}