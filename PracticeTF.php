<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Practice Question</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>   
<br>
<div class="containercontrol2">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">   
<h2>  
Q: Boolean refers to a binary data types containing two values; true or false.
</h2>
<h3 style="text-align: justify;	text-align-last: left;">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;"> 
    <input type="radio" class="radiobox" name="option" value="option1"> &nbsp True <br><br>
    <input type="radio" class="radiobox" name="option" value="option2"> &nbsp False
    </div>
    
    </h3>
    <center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
</body>
</html>

<?php

if (isset($_POST["submit"])) //If the submit button is pressed.
{
    $option1 = 0;
    $option2 = 0;
    $radiovalue = $_POST["option"];
    $usern = $_SESSION['usern'];

    include_once "ConnectDB.php";

    if($radiovalue == "option1")
    {
        $option1 = 1;
    } 
    if($radiovalue == "option2")
    {
        $option2 = 1;
    } 

    $sum = $option1 + $option2;

    if($sum > 0)
    {
        $_SESSION['Practice'] = "practiceTF";

        echo $option1, $option2; 
        
        //Insert details in the database table 
        $sql = "INSERT INTO practiceTF (usern, Option1, Option2)
        VALUES ('$usern', $option1, $option2)";
        if ($mysqli->query($sql)) //If query runs smoothly.
        {
            header("Location: PracticeFollowup2.php");
        }
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("You have to choose at least one option.")'; 
        echo '</script>';
    }
}      
      
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script>