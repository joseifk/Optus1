<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: student1.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['idStudents']) && !empty($_POST['Stud_password'])) {
    $idStudents=$_POST['idStudents'];
    $Stud_password=$_POST['Stud_password'];

    $query =mysql_query("SELECT * FROM Students WHERE idStudents='".$idStudents."' AND Stud_password='".$Stud_password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['idStudents'];
    $dbpassword=$row['Stud_password'];
    }

    if($idStudents == $dbusername && $Stud_password == $dbpassword)

    {


    $_SESSION['session_username']=$idStudents;

    /* Redirect browser */
    header("Location: student1.php");
    }
    } else {

 $message =  "ID or password invalid!";
    }

} else {
    $message = "All spaces must be filled!";
}
}
?>




    <div class="container mlogin">
            <div id="login">
    <h1>Sign in</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">ID<br />
        <input type="text" name="idStudents" id="idStudents" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Password<br />
        <input type="password" name="Stud_password" id="Stud_password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Enter" />
    </p>
        <p class="regtext">You are not register? <a href="register.php" > Register here!</a>!</p>
</form>

    </div>

    </div>
	
	
	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	