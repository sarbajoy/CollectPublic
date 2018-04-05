<?php
include 'dbconnection.php';
session_start();

//edit the value of information within the square brackets
$weight = $collectMySQLConnection -> real_escape_string($_POST['weight']);

// if ($weight == ''){
//   $weight = '0';
// }

$query = "INSERT INTO Weight_Table (WEIGHT) VALUES ('" .$weight . "');";

$insert = $collectMySQLConnection -> query($query);

if (!$insert) {
  die("Couldn't enter data: ".$collectMySQLConnection->error);
}

echo "Data Insertion Successful";


?>
