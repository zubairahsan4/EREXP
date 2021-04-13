<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Practice Question Prompt</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>     
<br><br><br><br><br><br><br><br><br><br><br>
<div class="containercontrol" style="padding: 70px;">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">
<h3 style="text-align: justify;	text-align-last: left;">   
You are about to be redirected to a Practice Question. Please click on 'Next' below to proceed.
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
    header("Location: PracticeMCQ.php");
}      
      
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script>