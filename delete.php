<!DOCTYPE html>
<html>
	<head>
		<meta language="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="login.css">
		<title>Guvi</title>
	</head>
	<body>
		<div id="login_form">
			<h1>REMOVE</h1>
			<form id="pass_form" action="deleted.php" method="POST">
				<input id="user_name" type="text" name="mail_id" placeholder="Email ID"><br>
				<input id="pass_word" type="password" name="password" placeholder="Password"><br>
			</form>
			<button form="pass_form" id="sub_but" type="submit" onmouseover="inside(this)" onmouseout="outside(this)">DELETE</button><br>
		</div>
	</body>
</html>
