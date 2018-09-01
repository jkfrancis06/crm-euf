<?php

Class Session_dao extends CI_Model
{
    protected $table_name ='t_sessions';
    
    
    function listSessionByToken($id){
       
       $query = $this->db->get_where($this->table_name, array('c_token' => $id));
       return $query->result();
    }
    function listSessionByUser($id){
       
       $query = $this->db->get_where($this->table_name, array('c_user_id' => $id));
       return $query->result();
    }
    
    function addSession($session){
        $data = array(
            'c_token' => $session->c_token ,
            'c_user_id'=> $session->c_user_id,
            'c_date_create'=> date("Y:m:d H:i:s"),
            'c_date_update'=> date("Y:m:d H:i:s")
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function updateSession($token){
        $data = array(
            'c_date_update'=>date("Y-m-d H:i:s")
        );
        $this->db->where('c_token', $token);
        $this->db->update($this->table_name, $data); 
    }
    
    function deleteSessionByToken($token){
        $this->db->where('c_token', $token);
        $this->db->delete($this->table_name); 
    }
    
    function deleteSessionByUser($user){
        $this->db->where('c_user_id', $user);
        $this->db->delete($this->table_name); 
    }
    
    
}