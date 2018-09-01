<?php

Class Profil_dao extends CI_Model
{
    protected $table_name ='t_user_profil';
    
    function listAllProfil(){
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    
    function listProfilById($id){
        $query = $this->db->get_where($this->table_name, array('c_id' => $id));
        $profils = $query->result();
        foreach ($profils as $elt){
            $theProfil = $elt;
        }
        return $theProfil;
    }
            
   
    function addProfil($profil){
        $data = array(
            'c_libelle' => $profil->libelle ,
            'c_description' => $profil->description 
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function editProfil($profil){
        $data = array(
            'c_libelle' => $profil->libelle ,
            'c_description' => $profil->description 
        );
        $this->db->where('c_id', $profil->id);
        $this->db->update($this->table_name, $data); 
    }
    
    function deleteUser($profil){
        $this->db->where('c_id', $profil->id);
        $this->db->delete($this->table_name); 
    }
    
    function listSelectedModules($profil){
        $this->db->select(
                't_module.c_id,'
                . 't_module.c_libelle,'
                . 't_module.c_index, '
                 . 't_profil_to_mod.c_profil'
              );
        $this->db->from('t_profil_to_mod');
        $this->db->join('t_module', 't_profil_to_mod.c_module = t_module.c_id');
        $this->db->where("t_profil_to_mod.c_profil", $profil);
        $query = $this->db->get();
        return $query->result();
    }
    
    function listRestModules($profil){
        $this->db->select(
                't_module.c_id,'
                . 't_module.c_libelle,'
                . 't_module.c_index, '
                . 't_profil_to_mod.c_profil'
              );
        $this->db->from('t_module');
        $this->db->join('t_profil_to_mod', 't_profil_to_mod.c_module = t_module.c_id','left');
        //$this->db->where("t_profil_to_mod.c_profil !=", $profil);
        $query = $this->db->get();
        return $query->result();
    }
    function addModule($profil, $module){
         $data = array(
            'c_profil' => $profil ,
            'c_module' => $module
        );
         
//        print_r($data);
//        exit();
        $this->db->insert('t_profil_to_mod', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    } 
    function deleteModule($profil, $module){
          $data = array(
            'c_profil' => $profil ,
            'c_module' => $module
        );
        $this->db->where($data);
        $this->db->delete('t_profil_to_mod'); 
    }

}