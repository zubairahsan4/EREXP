<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Task Instruction</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>
<br> <br>
<center>
    <h1>Welcome to the Emotion Recognition-Program Comprehension Experiment</h1>
</center>        
<br>
<div class="containercontrol">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">
<h3><center>Description of the Study Procedures</h3> </center><br>
<h4 style="text-align: justify;	text-align-last: left; font-size: 24px;">   
If you agree to be in this study, you will be asked to do the following things:<br><br>
<ul>
<li>Answer a series of <b>eight (8) main questions</b>. Two practice tasks (1 MCQ and 1 True/False) will be shown after this instruction section. <br>
<li>The main questions are programming questions presented in the form of problem statements commonly presented in Fundamental of Programming course.</b> <br>
<li>Your task is to read the problem statement and select the correct answer. Note that there is only<b> one correct answer for each task.</b><br>
<li>It is estimated that the session will take about 30 minutes. However, there is no fixed duration to complete the tasks. Answer the questions at your own comfortable pace but you are required to answer all questions to complete the experiment. The study is considered finished once you answer all 8 questions.  <br>
<li>Your participation in this study is only for one (1) time as you are only expected to do one (1) session.<br>
</ul>
</h4>
<center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
<br> <br>
</body>
</html>

<?php

if (isset($_POST["submit"])) //If the submit button is pressed.
{
    header("Location: PracticePrompt.php");
}      
      
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script> 