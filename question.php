<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/question.css">
	<title>Question</title>
</head>
<body>
	<div id="main">
		<h1 id="MainTitle">Simple Stack Exchange</h1>
		<?php
			$question_id = $_GET["id"];
			$link = mysqli_connect("localhost","root","","stack_exchange");
	
			if(!$link){
				die("Error: Unable to connect to database\n");
			}
			else{
				//retrieve question
				$query = "SELECT * FROM question WHERE question_id='".$question_id."'";
				$query_result = mysqli_query($link,$query);
				while($row=mysqli_fetch_row($query_result)){
					echo	'<div id="question">
								<h2 id="topic">'.$row[3].'</h2>
								<hr>
								<p id="content">'.$row[4].'</p><br>
								<a href="delete.php" id="delete">delete</a>
								<div class="char">|</div> <a href="ask.php" id="edit">edit</a>
								<div class="char">|</div> <div id="email">'.$row[2].'</div>
								<div id="askedby">asked by</div>
							</div><br>';
				}
				
				//retrieve answers
				$query = "SELECT content, email, votes FROM answer WHERE question_id='".$question_id."'";
				$query_result = mysqli_query($link, $query);
				$num_answer = mysqli_num_rows($query_result);
				echo '<h2 id="NumAnswer">'.$num_answer.' Answer</h2><hr>';
				while($row = mysqli_fetch_row($query_result)){
					echo	'<div id="answer">
								<p id="content">'.$row[0].'</p><br>
								<div id="email">'.$row[1].'</div>
								<div id="answeredby">answered by</div><br>
								<hr id="separator">
							</div><br>';
				}
			}
			mysqli_close($link);
		?>
	</div>
	<br>
</body>
</html>