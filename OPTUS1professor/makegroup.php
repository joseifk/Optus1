
 

<html>
  <style>
    body {
    background-image: url("http://www.spirehealthcare.com/ImageFiles/Roding/MICROSITE-IMAGE.jpg");
    background-color: #cccccc;
}
    
         </style>
          <title>student</title>
  <?php
 $dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos 
     $dbpass = '';
     $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql'); 
     $dbname = 'mydb';             
     mysql_select_db($dbname);        
   
?>


         <html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

 <?php


$resulta = mysql_query("SELECT DISTINCT idStudents, Stud_quadrant FROM mydb.Students ")
or die(mysql_error());  ; 
  

while($row = mysql_fetch_array( $resulta )) {

$b=$row['idStudents'];
 

$a = (rand(1,3)); 
$editar = "UPDATE `mydb`.`Students` SET `Grupo` = '$a' WHERE `students`.`idStudents` = '$b' ";
$resultadin=mysql_query($editar); }

echo "New groups were created!"




?>





<br><br>
  <button><a href="professor1.php">back</a></button>

</html>

