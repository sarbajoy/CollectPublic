<?php
session_start();
include 'dbconnection.php';

$email = $_SESSION["email"];

$itemID = $_GET["id"];
$width = $_GET["width"];
$length = $_GET["length"];

//retrieve weight
$weightQuery = "SELECT *FROM Weight_Table ORDER BY DATE_ADDED DESC LIMIT 1;";
$weightResult = $collectMySQLConnection -> query($weightQuery);
$weightRow = $weightResult ->fetch_assoc();
$weight = $weightRow["WEIGHT"];

//clear weight table
$clearQuery = "DELETE FROM Weight_Table";
$clear = $collectMySQLConnection -> query($clearQuery);

//update data to table
$query = "INSERT INTO User_Transaction(ITEM_ID, EMAIL, WEIGHT, LENGTH, WIDTH) VALUES
	('" . $itemID . "','" .$email . "','" .$weight . "','" .$length . "','" .$width . "');";
$insert = $collectMySQLConnection -> query($query);

if (!$insert) {
  die("Couldn't enter data: ".$collectMySQLConnection->error);
}

echo "<a href=\"http://localhost:8888/Collect/imageDisplay.php\">Check Data </a>";

?>
