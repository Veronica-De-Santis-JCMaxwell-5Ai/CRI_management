<?php
//CONNECTIONS --------------------------
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbName = "subject";
mysqli_connect($host,$user,$password) or die("Non riesco a connettermi al DB");
mysqli_select_db($dbName) or die("Non riesco a selezionare il DB");
//--------------------------------------
//CARDS---------------------------------
$numberOfCard = 2;
$maxNumber = 5;
//--------------------------------------
?>
