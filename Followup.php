<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Question Review</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>     
<br><br>
<div class="containercontrol2">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">
<h2>   
Please rate your arousal level during the previous question: </h2>
    <div>
        <img class="image" src="Arousal.PNG" alt="Italian Trulli"> <br>
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="arousal" value="1" required>&nbsp&nbsp
    </div>
    <div class="column">    
        <input type="radio" class="radiobox"  name="arousal" value="2" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="arousal" value="3" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="arousal" value="4" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="arousal" value="5" required>&nbsp&nbsp
    </div>
<br>
<h2>
Please rate your pleasure level during the previous question: </h2>
    <div>
    <img class="image" src="Pleasure.PNG" alt="Italian Trulli"> <br>
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="pleasure" value="1" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="pleasure" value="2" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="pleasure" value="3" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="pleasure" value="4" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="pleasure" value="5" required>&nbsp&nbsp
    </div>
<br>
<h2>
Please rate your dominance level during the previous question: </h2>
    <div>
    <img class="image" src="Dominance.PNG" alt="Italian Trulli"> <br>
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="dominance" value="1" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="dominance" value="2" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="dominance" value="3" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="dominance" value="4" required>&nbsp&nbsp
    </div>
    <div class="column">
        <input type="radio" class="radiobox"  name="dominance" value="5" required>&nbsp&nbsp
    </div>
    <br><br><br>
<center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
<br> <br>
</body>
</html>

<?php
if (isset($_POST["submit"])) //If the submit button is pressed.
{
    include_once "ConnectDB.php";

    $question = $_SESSION['QN'];
    $usern = $_SESSION['usern'];

    $arousal = $_POST["arousal"];
    $pleasure = $_POST["pleasure"];
    $dominance = $_POST["dominance"];
    
    echo $arousal, $pleasure, $dominance;

    //Insert details in the database table 
    $sql = "UPDATE $question SET Arousal=$arousal, Pleasure=$pleasure, Dominance=$dominance  WHERE usern = '$usern'";
    if ($mysqli->query($sql)) //If query runs smoothly.
    {
        $a = explode(" ", $_SESSION['New Array']);
        
        // Loop
        $randomKey=array_rand($a);
        $b = $a[$randomKey];
        unset($a[$randomKey]);

        // Test      
        echo $randomKey."<br>";
        var_dump($a);
        $_SESSION['New Array'] = implode(" ",$a);

        echo $b;

        if ($b == 1){header("Location: M2.php");}
        else if ($b == 2){header("Location: TF4.php");}
        else if ($b == 3){header("Location: TF1.php");}
        else if ($b == 4){header("Location: M3.php");}
        else if ($b == 5){header("Location: TF2.php");}
        else if ($b == 6){header("Location: M1.php");}
        else if ($b == 7){header("Location: M4.php");}
        else if ($b == 8){header("Location: TF3.php");}
        else {header("Location: Final.php");} 
    }
}
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script>