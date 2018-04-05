<?php
session_start();

$email = $_SESSION["email"];
$itemID = exec("python uniqueID.py $email");
$_SESSION["itemID"]= $itemID;

if ($itemID == "") {
  $itemID= strval(rand());
}

$filename =  $itemID. '.png';
$filepath = 'Images/';
$fileDir = $filepath.$filename;
move_uploaded_file($_FILES['webcam']['tmp_name'], $fileDir);
$_SESSION["fileDir"]=$fileDir;

//get dimension data
$dimData = strval(exec ("python object_size.py --image $fileDir"));

// to work with converting string to json
// in order to get function running we are just doing string manipulation
$dimData = str_replace ("{","",$dimData);
$dimData = str_replace ("}","",$dimData);
$dimData = str_replace ("width","",$dimData);
$dimData = str_replace ("length","",$dimData);
$dimData = str_replace (":","",$dimData);
$dimData = str_replace (",","",$dimData);
$dimData = str_replace ("\"","",$dimData);

//split remaining string to array
$dimInfo = explode(" ",$dimData);

//get value of width and length
$width = $dimInfo[3];
$length = $dimInfo[1];

// //insert into session variables for future usage
$_SESSION["width"]=$width;
$_SESSION["length"]=$length;

$dataToSend = array (
  'id' => $itemID,
  'width' => $width,
  'length' => $length,
  'php' => 'hypertext processor'
);

$getRequest = http_build_query($dataToSend);

// make get request to remote server, fill in with md5 code, width and length
$newURL = "https://collect-fydp.herokuapp.com/storeData.php?" . $getRequest;
$_SESSION["url"]=$newURL;


?>
