<?php

Class SMS_dao extends CI_Model {
    public function __construct(){
	parent::__construct();
        
    }
    public function send($numero,$msg){
        
        $url = "http://192.168.70.213:13023/cgi-bin/sendsms?username=kannel&password=kannel&to=$numero&text=$msg";
        $xml = file_get_contents($url);
    }
}