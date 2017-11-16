<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


	<?php

if(isset($_POST["register"])){


if(!empty($_POST['idStudents']) && !empty($_POST['Stud_firstname']) && !empty($_POST['Stud_lastname']) && !empty($_POST['Stud_password']) && !empty($_POST['Stud_email'])) {
	$idStudents=$_POST['idStudents'];
    $Stud_firstname=$_POST['Stud_firstname'];
	$Stud_lastname=$_POST['Stud_lastname'];
	$Stud_password=$_POST['Stud_password'];
	$Stud_email=$_POST['Stud_email'];
	
	
	

		
	$query=mysql_query("SELECT * FROM Students WHERE idStudents='".$idStudents."'");
	$numrows=mysql_num_rows($query);
	
	if($numrows==0)
	{
	

$sql = "INSERT INTO `mydb`.`Students` (`idStudents`, `Stud_firstname`, `Stud_lastname`, `Stud_password`, `Stud_email`, `Stud_quadrant`, `Grupo`) 
VALUES ('$idStudents', '$Stud_firstname', '$Stud_lastname', '$Stud_password','$Stud_email', '0', '0')";

	$result=mysql_query($sql);


	if($result){
	 $message = "Account created";
	} else {
	 $message = "Error filling the spaces";
	}

	} else {
	 $message = "The ID given already exists!";
	}

} else {
	 $message = "All spaces must be filled";
}
}
?>


<?php if (!empty($message)) {echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";} ?>
	
<div class="container mregister">
			<div id="login">
	<h1>Register</h1>
<form name="registerform" id="registerform" action="register.php" method="post">

	<p>
		<label for="user_pass">ID<br />
		<input type="text" name="idStudents" id="idStudents" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_login">First name<br />
		<input type="text" name="Stud_firstname" id="Stud_firstname" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_login">Last name<br />
		<input type="text" name="Stud_lastname" id="Stud_lastname" class="input" size="32" value=""  /></label>
	</p>
	
	<p>
		<label for="user_pass">Password<br />
		<input type="Stud_password" name="Stud_password" id="Stud_password" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">E-mail<br />
		<input type="Stud_email" name="Stud_email" id="Stud_email" class="input" value="" size="32" /></label>
	</p>
	
	
	

		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Register" />
	</p>
	
	<p class="regtext">Already have an account? <a href="login.php" >sign in!</a>!</p>
</form>
	
	</div>
	</div>
	
	
	
