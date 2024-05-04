<?php

require_once '../controller/DBController.php';

require_once '../controller/contactController.php';
$db = new DBController;
$con = new contact;

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];


    // Call your PHP function with the input values

    // $searchByNumberResult= 
    $results = $con->searchByNumber($phone);

}



?>
