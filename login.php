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
			<h1>Login</h1>
			<form id="pass_form" action="check.php" method="POST">
				<input id="user_name" type="email" name="mail_id" placeholder="Login ID or Mail ID"><br>
				<input id="pass_word" type="password" name="password" placeholder="Password"><br>
			</form>
			<button form="pass_form" id="sub_but" type="submit">Submit</button>
			<br><br><a href="register.php">For New Users</a>
			<br><br><a href="change.php">To change password</a>
			<br><br><a href="delete.php">To delete account</a>
		</div>

		<p id="result"></p>
 
        
	</body>
</html>
