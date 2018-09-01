<?php

Class Abonne_dao extends CI_Model
{
    protected $table_name ='t_abonnes';
    
    function listAllAbonne($status){
        $query = $this->db->get_where($this->table_name, array('c_state' => $status ));
        return $query->result();
    }
    function listAbonneByGest($status){
        $query = $this->db->get_where($this->table_name, array('c_gestionnaire' => $status ));
        return $query->result();
    }
    function countAbonneByGest($status){
        $query = $this->db->get_where($this->table_name, array('c_gestionnaire' => $status ));
        return $query->num_rows();
    }
    function listAllInstall($date){
        $this->db->select('t_abonnes.c_id,'
                . 't_abonnes.c_nom,'
                . 't_abonnes.c_prenom,'
                . 't_abonnes.c_su,'
                . 't_abonnes.c_modem,'
                . 't_abonnes.c_id_survey,'
                . 't_abonnes.c_iad, '
                . 't_abonnes.c_id_blr, '
                
                . 't_schedule_sub.c_date');
        $this->db->from('t_schedule_sub');
        $this->db->join('t_abonnes', 't_abonnes.c_id = t_schedule_sub.c_abonne');
        $this->db->where("t_schedule_sub.c_date", $date);
        $query = $this->db->get();
        return $query->result();
    }
    public function getParameters(){
        $query = $this->db->get_where('t_parameters', array('c_id' => 1 ));
        return $query->result();
    }
    public function editSettings($survey, $install, $maintenance){
         $data = array(
           'c_survey'=>$survey,
           'c_install'=>$install,
           'c_maintenance'=>$maintenance,
        );
        $this->db->where('c_id', 1);
        $this->db->update('t_parameters', $data); 
    }

    public function installListById($id){
        $this->db->select('t_abonnes.c_id,'
                . 't_abonnes.c_nom,'
                . 't_abonnes.c_prenom,'
                . 't_abonnes.c_su,'
                . 't_abonnes.c_modem,'
                . 't_abonnes.c_id_survey,'
                . 't_abonnes.c_iad, '
                . 't_abonnes.c_id_blr, '
                . 't_abonnes.c_profil_id, '
                . 't_schedule_sub.c_date');
        $this->db->from('t_schedule_sub');
        $this->db->join('t_abonnes', 't_abonnes.c_id = t_schedule_sub.c_abonne');
        $this->db->where("t_abonnes.c_id", $id);
        $query = $this->db->get();
        return $query->result()[0];
    }
    
     public function installList(){
        $this->db->select('t_abonnes.c_id,'
                . 't_abonnes.c_nom,'
                . 't_abonnes.c_prenom,'
                . 't_abonnes.c_su,'
                . 't_abonnes.c_modem,'
                . 't_abonnes.c_id_survey,'
                . 't_abonnes.c_iad, '
                . 't_abonnes.c_id_blr, '
                
                . 't_schedule_sub.c_date');
        $this->db->from('t_schedule_sub');
        $this->db->join('t_abonnes', 't_abonnes.c_id = t_schedule_sub.c_abonne');
        //$this->db->where("t_schedule_sub.c_date", $date);
        $query = $this->db->get();
        return $query->result();
    }
            
   
    function saveProvSub($nom,$prenom,$iblr,$date,$su,$profil){
         $data = array(
           //'c_id'=>$abonne->id,
           'c_nom'=>$nom,
           'c_prenom'=>$prenom,
           'c_ville'=>"N/A",
           'c_quartier'=>"N/A",
           'c_tel'=>"N/A",
           'c_mail'=>"N/A",
           'c_id_survey'=> "N/A",
           'c_profil_id'=>$profil,
           'c_su'=>$su,
           'c_modem'=>"N/A",
            'c_date_ins'=>$date,
             'c_id_blr'=>$iblr,
             //'c_gestionnaire'=>$gestionnaire,
            'c_date_cre'=>date("Y:m:d"),
           'c_state'=>4
                
            
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
            
    function listAllNode(){
        $this->db->order_by("c_nom", "asc"); 
        $query = $this->db->get_where('t_node', array());
        return $query->result();
    }
    
    function listAllHBS(){
        $this->db->where("deviceTypeId", 2); 
        $this->db->order_by("name", "asc"); 
        $query = $this->db->get('Hosts');
        return $query->result();
    }
    
    
    function listActifBSU($id){
       $query = $this->db->get_where('Hosts', array('isDown' => 0, 'deviceTypeId' => $id ));
       $eqpts=$query->result();
      // $theBS = NULL;
       $i=0;
       foreach ($eqpts as $eqpt){
           if ($eqpt != NULL) {
                $i++;
            }
            // $theBS = $eqpt;
       }
       return $i;
    }
    
    function getAllBSU(){
       $query = $this->db->get_where('Hosts', array('isDown' => 0, 'deviceTypeId' => 2 ));
       $eqpts=$query->result();
       return $eqpts;
    }
    
    function listAllBSU($id){
       $query = $this->db->get_where('Hosts', array('deviceTypeId' => $id ));
       $eqpts=$query->result();
      // $theBS = NULL;
       $i=0;
       foreach ($eqpts as $eqpt){
           if ($eqpt != NULL) {
                $i++;
            }
            // $theBS = $eqpt;
       }
       return $i;
    }
    
    function listAbonneById($id){
       $query = $this->db->get_where($this->table_name, array('c_id' => $id));
       $subs = $query->result();
       //print_r($subs);
       //exit();
       $theSub = NULL;
       foreach ($subs as $sub){
           $theSub = $sub;
       }
       return $theSub;
    }
    
    function listAbonneByBLR($id){
        $this->db->like('c_id_blr',$id);
       $query = $this->db->get($this->table_name);
       $subs = $query->result();
       //print_r($subs);
       //exit();
       $theSub = NULL;
       foreach ($subs as $sub){
           $theSub = $sub;
       }
       return $theSub;
    }
    
    function listSurveyById($id){
       $query = $this->db->get_where('t_survey', array('c_id_survey' => $id));
       $subs = $query->result();
       //print_r($subs);
       //exit();
       $theSub = NULL;
       foreach ($subs as $sub){
           $theSub = $sub;
       }
       return $theSub;
    }
    
    function listNodeById($id){
       $query = $this->db->get_where('t_node', array('c_id' => $id));
       $subs = $query->result();
       //print_r($subs);
       //exit();
       $theSub = NULL;
       foreach ($subs as $sub){
           $theSub = $sub;
       }
       return $theSub;
    }
    
    
    function getSerialNo($id){
         $query = $this->db->get_where('Hosts', array('name' => $id));
       $eqpts=$query->result();
       $theSU = NULL;
       foreach ($eqpts as $eqpt){
          $theSU = $eqpt;
       }
       if(isset($theSU->serialno))           return $theSU->serialno;
       
    }
    function listSUBySerial($id){
       $query = $this->db->get_where('Hosts', array('serialno' => $id));
       $eqpts=$query->result();
       $theSU = NULL;
       foreach ($eqpts as $eqpt){
          $theSU = $eqpt;
       }
       return $theSU;
    }
    
    function listSUByIP($id){
       $query = $this->db->get_where('Hosts', array('ipaddr' => $id));
       $eqpts=$query->result();
       //print_r($eqpts);
       $theSU = NULL;
       foreach ($eqpts as $eqpt){
          $theSU = $eqpt;
       }
       return $theSU;
    }
    function listBSByIP($id){
       $query = $this->db->get_where('HostState', array('remoteIPAddress' => $id));
       $eqpts=$query->result();
       $theBS = NULL;
       foreach ($eqpts as $eqpt){
          $theBS = $eqpt;
       }
      // print_r($theBS);
       //exit();
       $query = $this->db->get_where('Hosts', array('id' => $theBS->hostId, 'deviceTypeId' => 2));
       $eqpts=$query->result();
       $theBS = NULL;
       foreach ($eqpts as $eqpt){
          $theBS = $eqpt;
       }
       return $theBS;
    }
    function getCountOfDay($id){
       $query = $this->db->get_where(' t_schedule_sub', array('c_date' => $id));
       return $query->num_rows();
    }
    function getInstallPlan(){
        $query = $this->db->get_where('t_parameters', array('c_id' => 1));
        $profils=$query->result();
        $theProfil = NULL;
        foreach ($profils as $profil){
           $theProfil = $profil;
        }
       return $theProfil->c_install;
    }
    function getCountOfHSU($id){
       $query = $this->db->get_where('HostState', array('remoteIPAddress' => $id));
       return $query->num_rows();
    }
    function getListOfHSU($id){
        $query = $this->db->get_where('HostState', array('remoteIPAddress' => $id));
        return $profils=$query->result();
    }
    
    function getHost($id){
        $this->db->select(
                'Hosts.name,'
                . 'Hosts.isDown,'
                . 'HostState.uptime,'
                . 'HostState.wirelessStatus,'
                . 'HostState.channelWidth,'
                . 'HostState.dataRate,'
                . 'HostState.transmitPower,'
                . 'HostState.ethernetStatus,'
                . 'HostState.ethernetSpeed,'
                . 'HostState.ethernetFullDuplex,'
                . 'HostState.signalLevel0,'
                . 'HostState.signalLevel1,'
               . 'HostState.frequency,'
                . 'HostState.remoteTransmitPower,'
                .'Hosts.ipaddr'
                
            );
        $this->db->from('Hosts');
        $this->db->join('HostState', 'Hosts.id = HostState.hostId');
        $this->db->where("HostState.hostId", $id);
        
        $query = $this->db->get();
      
        $subs = $query->result();
        $theSub = NULL;
        foreach ($subs as $sub){
            $theSub = $sub;
        }
        return $theSub;
    }
    function getHostState($id){
      $this->db->select(
                'Hosts.name,'
                . 'Hosts.isDown,'
                . 'HostState.uptime,'
                . 'HostState.wirelessStatus,'
                . 'HostState.channelWidth,'
                . 'HostState.dataRate,'
                . 'HostState.transmitPower,'
                . 'HostState.ethernetStatus,'
                . 'HostState.ethernetSpeed,'
                . 'HostState.ethernetFullDuplex,'
                . 'HostState.signalLevel0,'
                . 'HostState.signalLevel1,'
               . 'HostState.frequency,'
                . 'HostState.remoteTransmitPower'
                
            );
        $this->db->from('Hosts');
        $this->db->join('HostState', 'Hosts.id = HostState.hostId');
        $this->db->where("Hosts.ipaddr", $id);
        
        $query = $this->db->get();
      
        $subs = $query->result();
        $theSub = NULL;
        foreach ($subs as $sub){
            $theSub = $sub;
        }
        return $theSub;
    }
    function listInstallNumberByDate(){
        $sql = "SELECT date_format( c_date_ins, '%Y-%m-%d' ) as hdate, count(c_id) as nbre_install FROM `t_abonnes` where c_state = 4 group by hdate";
        $query = $this->db->query($sql);
        $result=$query->result_array();
        return $result;
    }
    function listProfilById($id){
       $query = $this->db->get_where('t_profil', array('c_id' => $id));
       $profils=$query->result();
       $theProfil = NULL;
       foreach ($profils as $profil){
          $theProfil = $profil;
       }
       return $theProfil;
    }
    
    function listAllProfil(){
       $query = $this->db->get('t_profil');
       $profils=$query->result();
      
       return $profils;
    }
    function addAbonne($abonne){
        
        $data = array(
           //'c_id'=>$abonne->id,
           'c_nom'=>$abonne->nom,
           'c_prenom'=>$abonne->prenom,
           'c_ville'=>$abonne->ville,
           'c_quartier'=>$abonne->quartier,
           'c_tel'=>$abonne->tel,
           'c_mail'=>$abonne->mail,
           'c_id_survey'=> $abonne->survey,
           'c_profil_id'=>$abonne->profil_id,
           'c_su'=>$abonne->su,
           'c_modem'=>$abonne->modem,
            'c_user'=>$abonne->user,
            'c_date_cre'=>date("Y:m:d"),
           'c_state'=>$abonne->state
                
            
        );
        $this->db->insert($this->table_name, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function addSurvey($survey){
        $data = array(
           //'c_id'=>$abonne->id,
           'c_id_survey'=>$survey->id_survey,
           'c_longitude'=>$survey->longitude,
           'c_latitude'=>$survey->latitude,
           'c_mat'=>$survey->mat,
           'c_cable'=>$survey->cable,
           'c_node'=>$survey->node,
           'c_bs'=> $survey->bs,
           'c_eligibilite'=>$survey->eligibilite,
           
        );
        $this->db->insert('t_survey', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
        
    }
    function addScheduleDate($id,$date){
        $data = array(
           //'c_id'=>$abonne->id,
           'c_abonne'=>$id,
           'c_date'=>$date,
         
        );
        $this->db->insert('t_schedule_sub', $data);
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
    function updateEligibilite($abonne){
        $data = array(
      
           'c_state'=>$abonne->state,
           //'c_date_ins'=>$abonne->date_ins,
           //'c_date_cre'=>$abonne->date_cre,
           'c_date_mod'=> date("Y-m-d H:i:s"),
            
        );
       
        $this->db->where('c_id', $abonne->id);
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
    
    function editSurvey($survey){
        $data = array(
          
           'c_longitude'=>$survey->longitude,
           'c_latitude'=>$survey->latitude,
           'c_mat'=>$survey->mat,
           'c_cable'=>$survey->cable,
           'c_node'=>$survey->node,
           'c_bs'=>$survey->bs,
           'c_eligibilite'=>$survey->eligibilite,
        );
     
        $this->db->where('c_id_survey', $survey->id_survey);
        $this->db->update('t_survey', $data); 
    }
	
    function editAbonneStatus($abonne,$state){
        $data = array(
           //'c_id'=>$abonne->id,
           /*'c_nom'=>$abonne->nom,
           'c_prenom'=>$abonne->prenom,
           'c_tel'=>$abonne->tel,
           'c_mail'=>$abonne->mail,
           'c_profil_id'=>$abonne->profil_id,
           'c_su'=>$abonne->su,
           'c_modem'=>$abonne->modem,*/
          // 'c_date_ins'=>$abonne->date_ins,
           'c_date_mod'=>date("Y-m-d H:i:s"),
           'c_state'=>$state
            
        );
        $this->db->where('c_id', $abonne);
        $this->db->update($this->table_name, $data); 
    } 
    
    function editAbonneIns($abonne,$state){
        $data = array(
           //'c_id'=>$abonne->id,
           /*'c_nom'=>$abonne->nom,
           'c_prenom'=>$abonne->prenom,
           'c_tel'=>$abonne->tel,
           'c_mail'=>$abonne->mail,
           'c_profil_id'=>$abonne->profil_id,
           'c_su'=>$abonne->su,
           'c_modem'=>$abonne->modem,*/
          // 'c_date_ins'=>$abonne->date_ins,
          // 'c_date_mod'=>date("Y-m-d H:i:s"),
           'c_state'=>$state,
            'c_date_ins'=>date("Y-m-d H:i:s")
            
        );
        $this->db->where('c_id', $abonne);
        $this->db->update($this->table_name, $data); 
    }   
    function deleteAbonne($abonne){
        $this->db->where('c_id', $abonne->id);
        $this->db->delete($this->table_name); 
    }
    
    function setIAD($abonne){
       
        $data = array(
          
           'c_date_mod'=>date("Y-m-d H:i:s"),
          
            'c_su' => $abonne->su,
            'c_modem' => $abonne->modem,
            'c_iad'=> $abonne->iad,
            'c_id_blr'=> $abonne->id_blr,
            
        );
         $this->db->where('c_id', $abonne->id);
        $this->db->update($this->table_name,$data); 
    }
    function deleteSurvey($survey){
        $this->db->where('c_id_survey', $survey->id_survey);
        $this->db->delete('t_survey'); 
    }
    
    function cryptPass($pass){
        $key= "Wancia";
        $hash_code = crypt($pass,$key);
        return $hash_code;
    }
    function deletePlan($user){
        $this->db->where('c_abonne', $user);
        $this->db->delete('t_schedule_sub'); 
    }
    
    
    
    

}