<?php
include 'dbconnection.php';

$password = $collectMySQLConnection -> real_escape_string($_POST['password']);
$cPassword = $collectMySQLConnection -> real_escape_string($_POST['cPassword']);

if ($password != $cPassword) {
  header("Location: index.php");
}

session_start();
$email = $collectMySQLConnection -> real_escape_string($_POST['u_email']);
$fName = $collectMySQLConnection -> real_escape_string($_POST['u_fname']);
$lName = $collectMySQLConnection -> real_escape_string($_POST['u_lname']);

//query to see that there is no existing user with that email
$checkQuery = "SELECT * FROM User_Profile WHERE EMAIL = '" . $email . "'";
$check = $collectMySQLConnection -> query($checkQuery);

//if statement to either add new user or redirect user with existing email to login page
if($check->num_rows == 0)
{
  $_SESSION["email"]= $email;
  $query ="INSERT INTO User_Profile(EMAIL, FIRST_NAME, LAST_NAME, PASSWORD) VALUES
      ('" . $email . "','" .$fName . "','" .$lName . "', '" .$password . "');" ;
  $insert = $collectMySQLConnection -> query($query);
  if (!$insert) {
    die("Couldn't enter data: ".$collectMySQLConnection->error);
  }
  header("Location: local-mainPage.php");
}
else {
  header("Location: index.php");
}


?>
