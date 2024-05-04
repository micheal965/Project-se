<?php
require_once '../controller/contactController.php' ;
require_once '../controller/DBController.php' ;
require_once '../controller/authController.php' ;



session_start();

$id=$_SESSION['user_id'] ;
echo $id['id'] ;




$con=new contact ;
session_start();
$id=$_SESSION['user_id'] ;
$contacts=$con->retrieveContacts($id['id']);

?>
