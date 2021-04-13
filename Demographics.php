<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Demographics</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css"/></head>
<body>
<br><br>
<center>
<div>
    <h1>Please enter your details.</h1>
</div>
</center>
<br>
<div class="containercontrol">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  onsubmit="return checkform(this);">
<div class="divspecial">
<input class="input1" type="text" name="name" placeholder="Full Name" required/><br>
<input class="input1" type="text" name="age" placeholder="Age" required/><br>
<input class="input1" type="text" name="race" placeholder="Race" required/><br>
<select class="input1" name="gender" required>
<option selected="true" disabled="disabled">Choose Your Gender... </option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
<select class="input1" name="major" required>
<option selected="true" disabled="disabled">Choose Your Major... </option>
<option value="Software Engineering">Software Engineering</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="Computer System and Network">Computer System and Network</option>
<option value="Information Systems">Information Systems</option>
<option value="Multimedia">Multimedia</option>
<option value="Data Science">Data Science</option>
</select>
<select class="input1" name="year">
<option selected="true" disabled="disabled" required>Choose Your Current Year of Degree... </option>
<option value="1st Year">1st Year</option>
<option value="2nd Year">2nd Year</option>
<option value="3rd Year">3nd Year</option>
<option value="4th Year">4th Year</option>
</select>
<select class="input1" name="grade" required>
<option selected="true" disabled="disabled">Choose Your Grade in Fundamentals of Programming... </option>
<option value="A+">A+</option>
<option value="A">A</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B">B</option>
<option value="B-">B-</option>
<option value="C+">C+</option>
<option value="C">C</option>
<option value="C-">C-</option>
<option value="D+">D+</option>
<option value="D">D</option>
<option value="F">F</option>
</select>
<select class="input1" name="experience" required>
<option selected="true" disabled="disabled">Choose Years of Programming Experience... </option>
<option value="1">1 Year or Less</option>
<option value="2">2 Years</option>
<option value="3">3 Years or more</option>
</select>
<select class="input1" name="expertise" required>
<option selected="true" disabled="disabled">Choose Your Programming Expertise... </option>
<option value="Novice">Novice</option>
<option value="Intermediate">Intermediate</option>
<option value="Expert">Expert</option>
</select>
<select class="input1" name="firstL" required>
<option selected="true" disabled="disabled">Choose The First Programming Language You Learned... </option>
<option value="Java">Java</option>
<option value="C">C</option>
<option value="C++">C++</option>
<option value="C#">C#</option>
<option value="Python">Python</option>
<option value="Javascript">Javascript</option>
<option value="PHP">PHP</option>
</select>
<select class="input1" name="languages" required>
<option selected="true" disabled="disabled">Number of Programming Languages You've Learned... </option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3 or more</option>
</select>
</div>
<center><button class="button1" type="submit" name="submit">Next</button></center>
</form>
</div>
<br><br>
</body>
</html>

<?php
if (isset($_POST["submit"])) //If the submit button is pressed.
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $race = $_POST['race'];
    $gender = $_POST['gender'];
    $major = $_POST['major'];
    $year = $_POST['year'];
    $grade = $_POST['grade'];
    $experience = $_POST['experience'];
    $expertise = $_POST['expertise'];
    $firstL = $_POST['firstL'];
    $languages = $_POST['languages'];

    include_once "ConnectDB.php";

    $_SESSION['usern'] = $name;
    
    //Insert details in the database table 
    $sql = "INSERT INTO Demographics (FName, Age, Race, Gender, Major, YearofD, Grade, Experience, Expertise, FirstLanguage, NofLanguages)
    VALUES ('$name', '$age', '$race', '$gender', '$major', '$year', '$grade', '$experience', '$expertise', '$firstL', '$languages')";
    if ($mysqli->query($sql)) //If query runs smoothly.
    {
        header('Location: TaskIns.php');
    }
}      
?>

<script>
history.pushState(null, null, 'no-back-button');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'no-back-button');
});
</script>