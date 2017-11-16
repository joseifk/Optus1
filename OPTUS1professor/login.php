<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_idProfessors"])){
// echo "Session is set"; // for testing purposes
header("Location: professor1.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['idProfessor']) && !empty($_POST['Prof_password'])) {
    $idProfessors=$_POST['idProfessor'];
    $Prof_password=$_POST['Prof_password'];

    $query =mysql_query("SELECT idProfessors,Prof_password FROM Professors WHERE idProfessors='".$idProfessors."' AND Prof_password='".$Prof_password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['idProfessors'];
    $dbpassword=$row['Prof_password'];
    }

    if($idProfessors == $dbusername && $Prof_password == $dbpassword)

    {


    $_SESSION['session_idProfessors']=$idProfessors;

    /* Redirect browser */
    header("Location: professor1.php");
    }
    } else {

 $message =  "Invalid ID or password";
    }

} else {
    $message = "You need to fill all spaces";
}
}
?>




    <div class="container mlogin">
            <div id="login">
    <h1>Hello! Log in:</h1>
<form name="loginform" id="loginform" action="" method="POST">
    <p>
        <label for="user_login">ID<br />
        <input type="text" name="idProfessor" id="Idprofessor" class="input" value="" size="20" /></label>
    </p>
    <p>
        <label for="user_pass">Password<br />
        <input type="password" name="Prof_password" id="Prof_password" class="input" value="" size="20" /></label>
    </p>
        <p class="submit">
        <input type="submit" name="login" class="button" value="Enter" />
    </p>
        <p class="regtext">Haven't register yet? <a href="register.php" >Register here!</a>!</p>
</form>

    </div>

    </div>
	
	
	
	<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
	