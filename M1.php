<?php 
session_start(); 

$timestamp = time();
$diff = 60; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
$slice = ($timestamp - $_SESSION['ts']);	
$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
$diff = $hld_diff;
$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>M1</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>
<br>
<div class="containercontrol2">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">

<div id="strclock">Clock Here!</div>
<script type="text/javascript">
var hour = <?php echo floor($hours); ?>;
var min = <?php echo floor($minutes); ?>;
var sec = <?php echo floor($seconds); ?>

function countdown() {
    if(sec <= 0 && min > 0) {
    sec = 59;
    min -= 1;
    }
    else if(min <= 0 && sec <= 0) {
    min = 0;
    sec = 0;
    }
    else {
    sec -= 1;
    }
    if(min <= 0 && hour > 0) {
    min = 59;
    hour -= 1;
    }

    document.getElementById('strclock').innerHTML = sec + ' seconds remaining';
    setTimeout('countdown()',1000);
}
countdown();

setInterval('nextPage()', 60000);

function nextPage() 
{
    window.location = "PHPDB.php";
}
</script>

<h2>
Q: Checks if radius is an actual value (greater than zero) and calculates the area. </h2>
<h3 style="text-align: justify;	text-align-last: left;">  
<div style="width: 100%; overflow: hidden;">
    <div style="width: 600px; float: left;"> 
    <input type="radio" class="radiobox" name="option" id="option" value="option1"> <br>
    if (radius > 1) {<br>
        area = radius*radius*PI;<br>
    }<br>
    </div>
    <div style="margin-left: 620px;">
    <input type="radio" class="radiobox" name="option" id="option" value="option2"> <br>
    if (radius >= 0) {<br>
        area = radius*radius*PI;<br>
    }<br>
    </div><br><br><br>
    <div style="width: 600px; float: left;"> 
    <input type="radio" class="radiobox" name="option" id="option" value="option3"> <br>
    if (radius > 0) {<br>
        area = radius^2*PI;<br>
    }<br>
    </div>
    <div style="margin-left: 620px;">
    <input type="radio" class="radiobox" name="option" id="option" value="option4"> <br>
    if (radius > 0) {<br>
        area = radius*radius*PI;<br>
    }<br>
    </div><br><br>
    </h3>
    <center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
</body>
</html>

<?php
include_once "ConnectDB.php";

$question = 'm1';
$option1 = 0;
$option2 = 0;
$option3 = 0;
$option4 = 0;
        
$usern = $_SESSION['usern'];
$_SESSION['QN'] = $question;

if (isset($_POST["submit"])) //If the submit button is pressed.
{
    $radiovalue = $_POST["option"];
    
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
        echo $option1, $option2, $option3, $option4; 
            
        //Insert details in the database table 
        $sql = "INSERT INTO $question (usern, Option1, Option2, Option3, Option4)
        VALUES ('$usern', $option1, $option2, $option3, $option4)";
        if ($mysqli->query($sql)) //If query runs smoothly.
        {
            header ("Location: Followup.php");
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