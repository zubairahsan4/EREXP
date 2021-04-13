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
Q: Average of three variables x, y, and z. Choose all correct answers.
</h2>
<h3 style="text-align: justify;	text-align-last: left;">
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;"> 
    <input type="radio" class="radiobox" name="option" value="option1"> <br>
    int x, y, z, avg;<br>
        x=2;<br>
        y=5;<br>
        z=3;<br>
        avg = (x+y+z)/3;<br>
    </div>
    <div style="margin-left: 620px;">
    <input type="radio" class="radiobox" name="option" value="option2"> <br>
    int x, y, z, avg;<br>
        x=2;<br>
        y=5;<br>
        z=3;<br>
        sum = x+y+z;<br>
        avg = sum/3;<br>
    </div><br><br><br>
    <div style="width: 600px; float: left;"> 
    <input type="radio" class="radiobox" name="option" value="option3"> <br>
    int x, y, z, sum, avg;<br>
        x=2;<br>
        y=5;<br>
        z=3;<br>
        avg = sum/3;<br>
    </div>
    <div style="margin-left: 620px;">
    <input type="radio" class="radiobox" name="option" value="option4"> <br>
    int x, y, z, sum, avg;<br>
        x=2;<br>
        y=5;<br>
        z=3;<br>
        sum = x+y;<br>
        avg = sum/3;<br>
    </div><br>
    
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
    $option3 = 0;
    $option4 = 0;
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
    if($radiovalue == "option3")
    {
        $option3 = 1;
    } 
    if($radiovalue == "option4")
    {
        $option4 = 1;
    } 

    $sum = $option1 + $option2 + $option3 + $option4;

    if($sum > 0)
    {
        $_SESSION['Practice'] = "practiceM";

        echo $option1, $option2, $option3, $option4; 
        echo $usern;
        
        //Insert details in the database table 
        $sql = "INSERT INTO practiceM (usern, Option1, Option2, Option3, Option4)
        VALUES ('$usern', $option1, $option2, $option3, $option4)";
        if ($mysqli->query($sql)) //If query runs smoothly.
        {
            header("Location: PracticeFollowup1.php");
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