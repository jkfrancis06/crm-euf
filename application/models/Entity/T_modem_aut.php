<?php  

class T_modem_aut{
protected $c_id ;
protected $c_libelle        ;
protected $c_serie   ;
protected $c_etat  ;
protected $c_imei         ;
protected $c_description;
protected $c_date_ins   ;
protected $c_date_cre   ;
protected $c_date_mod   ;

public function hydrate($data){
	foreach($data as $key=>$val){
		if($key=="c_id") $this->c_id=$val;
		if($key=="c_libelle") $this->c_libelle=$val;
		if($key=="c_serie") $this->c_serie=$val;
		if($key=="c_etat") $this->c_etat=$val;
		if($key=="c_imei") $this->c_imei=$val;
		if($key=="c_description") $this->c_description=$val;
		if($key=="c_date_ins") $this->c_date_ins=$val;
		if($key=="c_date_cre") $this->c_date_cre=$val;
		if($key=="c_date_mod") $this->c_date_mod=$val;
	}
}

public function getc_id(){
	 return $this->c_id;
	 }
public function setc_id($c_id){
	$this->c_id=$c_id;
	}
public function getc_libelle(){
	 return $this->c_libelle;
	 }
public function setc_libelle($c_libelle){
	$this->c_libelle=$c_libelle;
	}
public function getc_serie(){
	 return $this->c_serie;
	 }
public function setc_serie($c_serie){
	$this->c_serie=$c_serie;
	}
public function getc_etat(){
	 return $this->c_etat;
	 }
public function setc_etat($c_etat){
	$this->c_etat=$c_etat;
	}
public function getc_imei(){
	 return $this->c_imei;
	 }
public function setc_imei($c_imei){
	$this->c_imei=$c_imei;
	}

public function getc_description(){
	 return $this->c_description;
	 }
public function setc_description($c_description){
	$this->c_description=$c_description;
	}
public function getc_date_ins(){
	 return $this->c_date_ins;
	 }
public function setc_date_ins($c_date_ins){
	$this->c_date_ins=$c_date_ins;
	}
public function getc_date_cre(){
	 return $this->c_date_cre;
	 }
public function setc_date_cre($c_date_cre){
	$this->c_date_cre=$c_date_cre;
	}
public function getc_date_mod(){
	 return $this->c_date_mod;
	 }
public function setc_date_mod($c_date_mod){
	$this->c_date_mod=$c_date_mod;
	}
}



