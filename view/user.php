<?php
require_once '../controller/DBController.php';
require_once '../controller/authController.php';




session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['country'] = $_POST['country'];
    $_SESSION['gender'] = $_POST['gender'];
    //$_SESSION['gender'] = $_POST['gender'];

    $phone = $_SESSION['phone'];
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $country = $_SESSION['country'];
    $gender = $_SESSION['gender'];

    $us = new register;
    $us->makeProfile($phone, $firstName, $lastName, $email, $country, $gender);
   // $us = new register;
    $id = $us->getUser_id($firstName, $lastName, $phone);

    $_SESSION['user_id'] = $id;


    // $firstName = $_POST['firstName'] ?? '';
// $lastName = $_POST['lastName'] ?? '';
// $email = $_POST['email'] ?? '';
// $country = $_POST['country'] ?? '';
// $gender = $_POST['gender'] ?? '';


    // Redirect to a new page
    header("Location: home.php");

    exit;
}
?>
<