<?php 
session_start();
unset($_SESSION['session_idProfessor']);
session_destroy();
header("location:http://localhost/OPTUS1general/formulariogeneral.php");
?>
