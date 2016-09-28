<?php

//REMOVE BEFORE PRODUCTION -- Errors for Dev Only
ini_set('display_errors', 'On');

try{
  $db = new PDO('sqlite:./database.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //if something happens throw excpetion
}catch(Exception $e){
  echo $e->getMessage();
  die();
}



?>
