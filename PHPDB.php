<?php
session_start();

include_once "ConnectDB.php";

$option1 = 0;
$option2 = 0;
$option3 = 0;
$option4 = 0;


$usern = 1;//$_SESSION['usern'];
$question = $_SESSION['QN'];

$sql = "INSERT INTO $question (usern, Option1, Option2, Option3, Option4)
        VALUES ('$usern', $option1, $option2, $option3, $option4)";
    if ($mysqli->query($sql)) //If query runs smoothly.
    {
        header ("Location: Followup.php");
    }
?>