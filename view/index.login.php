<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['phone'] = $_POST['phone'];

    // Redirect to a new page
    header("Location: index.verify.php");
    exit;
}
?>
