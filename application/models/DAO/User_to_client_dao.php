<?php

Class User_to_client_dao extends CI_Model
{
    protected $table_name ='t_user_to_client';
    
    function listAllClient($user){
        $query = $this->db->get_where($this->table_name, array('c_user_id' => $user));
        return $query;
        
    }
    
    function addUserToClient($client_id,$user_id){
        $data = array(
            'c_client_id' => $client_id ,
            'c_user_id'=> $user_id
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function deleteUserToClient($client_id,$user_id){
        $this->db->where('c_client_id', $client_id);
        $this->db->where('c_user_id', $user_id);
        $this->db->delete($this->table_name); 
    }
    
    
    

}