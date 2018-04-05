<?php
include 'dbconnection.php';

session_start();
$email = $collectMySQLConnection -> real_escape_string($_POST['x_email']);
$password = $collectMySQLConnection -> real_escape_string($_POST['x_password']);


$query = "SELECT * FROM User_Profile WHERE EMAIL = '" . $email . "' AND PASSWORD = '" . $password . "'";
$results= $collectMySQLConnection -> query($query);

if($results->num_rows == 0)
{
    header("Location: index.php");
}
else {
  $_SESSION["email"]= $email;
  header("Location: local-mainPage.php");
}

?>
