<?php

//Connecting to database

$user = "root";
$pass = "";
$db = "webrtc";


	$connect = mysql_connect("localhost", $user, $pass);

if(!$connect){

die(mysql_error());

}


//Selecting database

$select_db = mysql_select_db($db, $connect);

if(!$select_db){

die(mysql_error());

}

?>