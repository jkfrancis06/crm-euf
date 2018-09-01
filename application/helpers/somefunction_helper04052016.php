<?php

/****** date au format fr *******/
function getFrenchDateFromEnglishDate($datei, $with_hour=false){

 @list($datejour, $dateheure)=preg_split("/\s+/",$datei);

 @list($annee, $mois, $jour)=preg_split('#\/|\-#',$datejour );
//echo "annee =$annee mois=$mois jour=$jour ";
 $heure=$mn=$sec=0; 
if($with_hour){
 @list($heure,$mn,$sec)=explode(':',$dateheure );
 $date=@date('d/m/Y H:i:s', mktime($heure, $mn, $sec, $mois,$jour, $annee));
} else {

$date=@date('d/m/Y ', mktime($heure, $mn, $sec, $mois,$jour, $annee));
 
}
 
 return $date;

}
function getEnglishDatefromFrench($datei, $with_hour=false, $separator="-", $last=false){

 @list($datejour, $dateheure)=preg_split("/\s+/",$datei);

 @list($jour, $mois, $annee)=preg_split('#\/|\-|\.#',$datejour );
//echo "annee =$annee mois=$mois jour=$jour ";
 $heure=$mn=$sec=0; 
if($with_hour){
 @list($heure,$mn,$sec)=explode(':',$dateheure );
 $date=@date("Y".$separator."m".$separator."d H:i:s", mktime($heure, $mn, $sec, $mois,$jour, $annee));
} else {

$date=@date("Y".$separator."m".$separator."d", mktime($heure, $mn, $sec, $mois,$jour, $annee));
 
}

 if($last){
 $date=@date("Y".$separator."m".$separator."d H:i:s", mktime(23, 55, 55, $mois,$jour, $annee)); 
 }
 
 return $date;

} 
function getISODatefromFrench($datei, $with_hour=false, $last=false){
if($datei==null || $datei==false || trim($datei)=="") return "";

@list($datejour, $dateheure)=preg_split("/\s+/",$datei);
$separator="";
@list($jour, $mois, $annee)=preg_split('#\/|\-|\.#',$datejour );
//echo "annee =$annee mois=$mois jour=$jour ";
 $heure=$mn=$sec=0; 
if($with_hour){
	@list($heure,$mn,$sec)=explode(':',$dateheure );
	$date=@date("YmdHis", mktime($heure, $mn, $sec, $mois,$jour, $annee));
} else {
	$date=@date("YmdHis", mktime($heure, $mn, $sec, $mois,$jour, $annee));
}

 if($last){
 $date=@date("YmdHis", mktime(23, 55, 55, $mois,$jour, $annee)); 
 } else {
	 $date=@date("YmdHis", mktime(0, 0, 0, $mois,$jour, $annee)); 
 }
 
 return $date;

}