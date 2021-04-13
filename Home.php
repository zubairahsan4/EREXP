<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>	
<body>
<br> <br>
<center>
    <h1>Welcome to the Emotion Recognition-Program Comprehension Experiment</h1>
</center>        
<br>
<div class="containercontrol">
<form method="post">
<h4 style="text-align: justify;	text-align-last: left;">   
Introduction <br><br>
<ul>
<li>You are being asked to be in a research study of investigating the suitability of programming questions for Fundamental of Programming course.  
<li>You were selected as a possible participant because you are a computer science student who has taken or is taking the abovementioned course.  
<li>We ask that you read this form and ask any questions that you may have before agreeing to be in the study. 
</ul><br>

Purpose of Study <br><br>
<ul>
<li>The purpose of the study is to identify (if any) issues associated with the type of questions commonly presented in lab and tutorial questions. 
<li>Ultimately, this research attempts to help students to improve their skills in writing computer programs. The results from the research may be presented as a conference or journal paper.
</ul><br>

Risks of Being in this Study <br> <br>
<ul>
    <li>There are no reasonable foreseeable (or expected) risks.  There may be unknown risks.
</ul><br>

Benefits of Being in the Study <br> <br>
<ul> 
    <li>You are helping the lecturers to design better materials for teaching. 
    <li>You are also helping yourself/future students undertaking the Fundamental of Programming Course for an effective learning experience.    
</ul><br>

Confidentiality <br> <br>
<ul>
    <li>The records of this study will be kept strictly confidential. Research records will be kept in a locked file, and all electronic information will be coded and secured using a password protected file. All recorded data including video recording will only be accessed by the researcher and the team for educational purposes only. We will not include any information in any report we may publish that would make it possible to identify you. 
    <li>Any finding and report we derive from this study will not affect your current and/or future grades as we will not be sharing any details with anyone at the FSKTM, UM that will have an influence on you.  
</ul><br>

Compensation <br> <br>
<ul>
    <li>You will receive 5 marks in the assessment of your Fundamentals of Programming course.
</ul><br>

Right to Refuse or Withdraw<br><br>
<ul>
    <li>The decision to participate in this study is entirely up to you.  You may refuse to take part in the study at any time without affecting your relationship with the investigators of this study.  Your decision will not result in any loss or benefits to which you are otherwise entitled.  You have the right not to answer any single question, as well as to withdraw completely from the interview at any point during the process; additionally, you have the right to request that the interviewer not use any of your interview material.
</ul><br>

Right to Ask Questions <br> <br>
<ul>
    <li>You have the right to ask questions about this research study and to have those questions answered by me before, during or after the research.  If you have any further questions about the study, at any time feel free to contact me, Dr Unaizah Obaidellah at unaizah@um.edu.my or by telephone at 03 7967 6398.  
</ul><br>

Consent<br><br>
<ul>
    <li>Clicking the ‘Next’ button below indicates that you have decided to volunteer as a research participant for this study, and that you have read and understood the information provided above. 
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
    header('Location: Demographics.php');
}      
      
?>

