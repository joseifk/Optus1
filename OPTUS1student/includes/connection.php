
<?php
require("constants.php");

$con = mysql_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysql_select_db('mydb') or die("Cannot select DB");
	
	?>