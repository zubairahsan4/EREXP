<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actual Question Prompt</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>     
<br><br><br><br><br><br><br><br><br><br><br>
<div class="containercontrol" style="padding: 70px;">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">
<h3 style="text-align: justify;	text-align-last: left;">   
You are about to be redirected to the actual questions. They are twelve (8) in total, you are required to choose one correct answer. Please click on 'Next' below to proceed.
</h3>
<center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
<br> <br>
</body>
</html>

<?php
if (isset($_POST["submit"])) //If the submit button is pressed.
{
        $a=array(1,2,3,4,5,6,7,8);

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
}
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script>