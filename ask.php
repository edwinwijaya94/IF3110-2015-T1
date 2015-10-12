<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/ask.css">
	<script src="validator.js"></script>
	<title >Ask A Question</title>
</head>
<body>
		<h1 id="MainTitle">Simple StackExchange</h1>
	<div id="MainDiv">	
		<h3 id="SubTitle">What's your question?</h3>
		<hr>
		<form name="AskForm" action="createQuestion.php" onsubmit="return validateQuestion()" method="post">
			<input id="name" type="text" name="Name" placeholder="Name"> <br>
			<input id="email" type="text" name="Email" placeholder="Email"> <br>
			<input id="topic" type="text" name="QuestionTopic" placeholder="Question Topic"> <br>
			<textarea id="content" type="text" name="Content" placeholder="Content"></textarea> <br>
			<input id="post" type="submit" value="Post"  >
		</form>
	</div>
	
</body>
</html>