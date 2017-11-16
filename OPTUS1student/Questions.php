



<html>
<style>
		body {
    background-image: url("http://eskipaper.com/images/minimal-white-wallpaper-1.jpg");
    background-color: #cccccc;
}
                p {
			color: black;
			font-family: Arial, sans-serif;
			font-size: 30px;}
                r {
			color: black;
			font-family: Arial, sans-serif;
			font-size: 35px;}
		
	</style>
<?
session_start();
if(!isset($_SESSION["session_username"])) {
  header("location:login.php");
} 

$dbhost = 'localhost';
     $dbuser = 'root';               // Datos para acceder a la base de datos , por defecto siempre los mismos 
     $dbpass = '';
     $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error de conexion mysql'); 
     $dbname = 'mydb';             
     mysql_select_db($dbname);  

     ?>
  <link rel="stylesheet" href="style.css">
<title>Brain Quadrant Test</title>
<head><center><h1>Please answer the following questions</h1></center></head><br>
<body>
  <script type="text/javascript" src="../jquery-3.2.1.js"></script>
	<SCRIPT LANGUAGE="JavaScript">

  $("document").ready(function() {


      $("p[class=pregunta]").css("color","black");
      $("input[type=radio]").css("text-align", "justify");
      $("body").css("margin-right", "200px").css("margin-left", "200px").css("margin-top", "50px");
      $("body").css("color", "black").css("background-position", "center");
      $("p[class=alerta]").css("color", "red");
      $("input[class=submit]").css("background-color", "blue").css("font-size", "25px").css("font-weight", "bold").css("border", "3px black")

      })


function testResults (form) {
  var brainQuadrant
  var answer = [0,0,0,0,0,0,0,0,0,0,0,0];
		answer[0] = form.q1.value;
		answer[1] = form.q2.value;
		answer[2] = form.q3.value;
		answer[3] = form.q4.value;
    answer[8] = form.q9.value;
		answer[4] = form.q5.value;
		answer[5] = form.q6.value;
		answer[6] = form.q7.value;
		answer[7] = form.q8.value;
		answer[9] = form.q10.value;
	  answer[10] = form.q11.value;
		answer[11] = form.q12.value;
for (i=0;i<12;i++){
  if (answer[i] == ""){
    alert("You must answer all questions")
    i=12
    var ok = 0;
  }}
if (ok !=0 ){
				var counts1 = 0;
				for(var i = 0; i < answer.length; ++i){
				if(answer[i] == 1)
				counts1++;}
				var counts2 = 0;
				for(var i = 0; i < answer.length; ++i){
				if(answer[i] == 2)
				counts2++;}
				var counts3 = 0;
				for(var i = 0; i < answer.length; ++i){
				if(answer[i] == 3)
				counts3++;}
				var counts4 = 0;
				for(var i = 0; i < answer.length; ++i){
				if(answer[i] == 4)
				counts4++;}

 		var result = Math.max(counts1, counts2, counts3, counts4);
		 if (result == counts1) brainQuadrant = "analytical";
     if (result == counts2) brainQuadrant = "relational";
     if (result == counts3) brainQuadrant = "practical";
     if (result == counts4) brainQuadrant = "experimental";
     alert("You are a " + brainQuadrant + " student");

  }

}


</SCRIPT>
 <?php 
$id = $_SESSION["session_username"];
$editar = "UPDATE `mydb`.`Students` SET `Stud_quadrant` = '1' WHERE idStudents =".$id."";
$resultadin=mysql_query($editar); 

?>
	<p class=alerta>* If you don´t answer these questions you won´t be assigned to any group</p><br><br>
	<form action="questions.php" id = "questions" method="GET">
	<input type="hidden" name="idStudents" VALUE="<?php echo $id;?>">
	<p class="pregunta"><strong>1. What is the University for?</strong><br></p>
				<input type="radio"name="q1" value=1>The school is indispensable to succeed and acquire essential knowledge to practice a profession.<br>
				<input type="radio"name="q1" value=2>The school is necessary; in it you learn methods and rules that then they are useful to organize themselves in life.<br>
				<input type="radio"name="q1" value=3>The school teaches us to live in society, to communicate and to work in group. It is useful to adapt to life.<br>
				<input type="radio"name="q1" value=4>At school you will find ideas and clues to dream and imagine. Is all desire to know more, to read and investigate, to travel ... but not to work to have a profession.<br>
	<p class="pregunta"><strong>2. School life<br></strong></p>
				<input type="radio"name="q2" value=4 required>In the school I detest the regulations, we must obey the bells or the bell, and reach an hour ... if I start thinking about something else ...punish.<br>
				<input type="radio"name="q2" value=3>The school would be fine if there were no teachers because it find one with his companions; unfortunately you have to be quiet and work.<br>
				<input type="radio"name="q2" value=1>I like school and I think it is useful to become something in life. I regret that not all teachers are able to make us progress quickly enough<br>
				<input type="radio"name="q2" value=2>School is important, so I do not like that teachers absent or that are unable to silence those who prevent us to work.<br>
	<p class="pregunta"><strong>3. Relations with theachers</strong><br></p>
				<input type="radio"name="q3" value=3>I always work better with teachers who are nice to me.<br>
				<input type="radio"name="q3" value=2>I prefer teachers who know how to take their class, even if they intimidate me and they scare me<br>
				<input type="radio"name="q3" value=4>I always prefer imaginative and inventive teachers.<br>
				<input type="radio"name="q3" value=1>I appreciate the teachers who know their subject well and do their classes very intense.<br>
	<p class="pregunta"><strong>4.Importance of the program</strong><br></p>
				<input type="radio"name="q4" value=2>I like the teachers who give in writing the detailed plan for the year. With They know where he is going.<br>
				<input type="radio"name="q4" value=1>I like the teachers who finish the program. It is important finish it to be in good condition at the beginning of the next course.<br>
				<input type="radio"name="q4" value=3>I do not like teachers who reject an interesting discussion for I can finish the lesson. I think it is necessary to know how to give classes a relaxed atmosphere.<br>
				<input type="radio"name="q4" value=4>I really like teachers who act as if there is no program, they talk about exciting topics and stop at them for a long time.<br>
	<p class="pregunta"><strong>5. Learning methods</strong><br></p>
				<input type="radio"name="q5" value=4>I do my homework and I learn the lessons in a relaxed way.<br>
				<input type="radio"name="q5" value=3>To work well I need someone close to me: my mother, father, partner, partner ... I often ask them questions or ask them help.<br>
				<input type="radio"name="q5" value=2>Work always in the same place and at the same time; I do by point what they have advised me I like to have things to do at home.<br>
				<input type="radio"name="q5" value=1>I work alone and quite fast, I know exactly how to do the work that they have assigned me; I concentrate and do not let anything distract me before end up.<br>
	<p class="pregunta"><strong>6. Group Work</strong><br></p>
				<input type="radio"name="q6" value=3>I like group work, have fun, discuss, change; Something always comes out of it.<br>
				<input type="radio"name="q6" value=2>Group work is effective if it is well planned; It is necessary that instructions are very clear and that the teacher imposes his discipline.<br>
				<input type="radio"name="q6" value=4>I do not like group work, you have to follow the instructions and respect the opinions of colleagues; I can not assert my ideas original, I have to follow the law of the group.<br>
				<input type="radio"name="q6" value=1>Group work is almost never effective, there are always colleagues who take advantage of him to do nothing or talk about something else ... you can not work seriously<br>
	<p class="pregunta"><strong>7. Attitude during an exam</strong><br></p>
				<input type="radio"name="q7" value=1>Study the subjects seriously for any exam. I analyze first place the statement and make a clear and logical plan.<br>
				<input type="radio"name="q7" value=2>When I know there is going to be an exam, I prepare my material, sheets, case, etc. I worry mainly about presenting my work well, I know that teachers give it a lot of importance.<br>
				<input type="radio"name="q7" value=3>Sometimes I have bad grades in the exams because I read very quickly the statement, I leave the topic or do not apply the appropriate method. I am distracted and independent.<br>
				<input type="radio"name="q7" value=4>I do not like to find myself alone before my sheet. I have a hard time concentrate, I do anything to attract the teacher, I ask things, I look at my colleagues and ask them to blow me.<br>
  <p class="pregunta"><strong>8. Oral questions in mathematics</strong><br></p>
				<input type="radio"name="q8" value=2>I'm afraid to go to the blackboard, I can not write right and it costs me I work concentrating my ideas when everyone looks at me.<br>
				<input type="radio"name="q8" value=1>I'm comfortable on the blackboard, but I do not like teachers who qualify the oral questions, because those who know best "blow" those who know less and so everything is false.<br>
				<input type="radio"name="q8" value=3>When I go to the blackboard I manage to make others laugh, and thus provoke the benevolence of the teacher. This is not always and not I conceal my difficulties for a long time.<br>
				<input type="radio"name="q8" value=4>I like to be asked when I can choose the moment by raising the hand; Sometimes I am able to easily find the solution to problems complicated and I do not see the solution of other simpler ones.<br>
	<p class="pregunta"><strong>9. Sensitivity to qualifications</strong><br></p>
				<input type="radio"name="q9" value=1>I give a lot of importance to the notes, I ask for the criteria that are going to Apply before beginning my exams. I write down all my notes and stroke my graphs of each subject to verify my progress along the course.<br>
				<input type="radio"name="q9" value=4>I do not write down my grades, I know my level more or less and when I need it I ask my teachers for notes to get the average.<br>
				<input type="radio"name="q9" value=2>I keep all my qualified exams, I add the points carefully because I've noticed that many teachers forget the means points and quarter points.<br>
				<input type="radio"name="q9" value=3>When I have done an exam I try to know my note as soon as possible; yes I find the teacher, I ask him if I have done well and what note I have had; I do not hesitate to ask him to put me a little more.<br>
  <p class="pregunta"><strong>10. Preferred subjects or interests</strong><br></p>
				<input type="radio"name="q10" value=3>I am above all a "literate", I like literature classes or foreign languages<br>
				<input type="radio"name="q10" value=1>I like math, physics or computer classes.<br>
				<input type="radio"name="q10" value=4>I really do not have favorite subjects, I like everything that allows imagine or create. I often think of something else and I am interested in the lesson when it comes to something new or unusual.<br>
				<input type="radio"name="q10" value=2>History is one of my favorite subjects; I also like biology.<br>
  <p class="pregunta"><strong>11. Readings </strong><br></p>
				<input type="radio"name="q11" value=2>I read very carefully, I do not let anything happen; I read even the introductions and the footnotes. I do not like to leave a book when I've I started reading it and I always finish it, even when it seems to me bored.<br>
				<input type="radio"name="q11" value=1>I never read or almost never read, except the books that advise me or impose teachers.<br>
				<input type="radio"name="q11" value=3>I really like that they advise me books, I look for them and I prefer them to others. I read many novels, I like the exciting stories, I They make you dream.<br>
				<input type="radio"name="q11" value=4>I read many stories of adventure or fiction; the more extraordinary They are the stories, I like them the most; they make me dream<br>
  <p class="pregunta"><strong>12. languages</strong><br></p>
				<input type="radio"name="q12" value=3>I'm good enough for languages, I like to talk and exchange opinions. Sometimes I do not let others express their opinion. Written I'm less good<br>
				<input type="radio"name="q12" value=1>I know the grammar rules and I am good when I write; I have less ease in the oral.<br>
				<input type="radio"name="q12" value=2>I learn from memory the vocabulary; however my results are medium; I find it hard to build sentences and I do not have a good accent.<br>
				<input type="radio"name="q12" value=4>I easily retain typical expressions and have a good accent. When I can not find the exact word, I manage to get by.<br>
	<br><br><center><INPUT class = "submit" TYPE="button" NAME="Submit" Value="Submit" onClick="testResults(this.form)"></center>
		<br><br>
	<button><a href="student1.php">back</a></button>


    </form>

  </body>

</html>

 
