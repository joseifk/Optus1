<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>


	<?php

if(isset($_POST["register"])){


if(!empty($_POST['idProfessors']) && !empty($_POST['Prof_firstname']) && !empty($_POST['Prof_lastname']) && !empty($_POST['Prof_password']) && !empty($_POST['Prof_email'])) {
	$idProfessors=$_POST['idProfessors'];
    $Prof_firstname=$_POST['Prof_firstname'];
	$Prof_lastname=$_POST['Prof_lastname'];
	$Prof_password=$_POST['Prof_password'];
	$Prof_email=$_POST['Prof_email'];
	
	
	

		
	$query=mysql_query("SELECT * FROM Professors WHERE idProfessors='".$idProfessors."'");
	$numrows=mysql_num_rows($query);
	
	if($numrows==0)
	{
	

$sql = "INSERT INTO `mydb`.`Professors` (`idProfessors`, `Prof_firstname`, `Prof_lastname`, `Prof_password`, `Prof_email`) 
VALUES('$idProfessors','$Prof_firstname','$Prof_lastname','$Prof_password','$Prof_email')";

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
		<input type="text" name="idProfessors" id="idProfessors" class="input" value="" size="20" /></label>
	</p>
	
	<p>
		<label for="user_login">First name<br />
		<input type="text" name="Prof_firstname" id="Prof_firstname" class="input" size="32" value=""  /></label>
	</p>

	<p>
		<label for="user_login">Last name<br />
		<input type="text" name="Prof_lastname" id="Prof_lastname" class="input" size="32" value=""  /></label>
	</p>
	
	<p>
		<label for="user_pass">Password<br />
		<input type="Prof_password" name="Prof_password" id="Prof_password" class="input" value="" size="32" /></label>
	</p>
	
	<p>
		<label for="user_pass">E-mail<br />
		<input type="Prof_email" name="Prof_email" id="Prof_email" class="input" value="" size="32" /></label>
	</p>
	
	
	

		<p class="submit">
		<input type="submit" name="register" id="register" class="button" value="Registrar" />
	</p>
	
	<p class="regtext">Already have an account? <a href="login.php" >sign in!</a>!</p>
</form>
	
	</div>
	</div>
	
	
	
