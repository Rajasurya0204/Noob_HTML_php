<!DOCTYPE html>
<html>
	<head>
		<title>Guvi</title>
		<link rel="stylesheet" href="login.css">
	</head>
	<body>
		<div id="register">
		<h1>Change Password</h1>
		<form id="register_form" action="changed.php" method="POST">
			<input type="email" name="mail_id" placeholder="Email ID"><br>			
			<input id="pass_word" type="password" name="password" placeholder="Old Password"><br>
			<input id="pass_word" type="password" name="npassword" placeholder="New Password"><br>
		</form>
		<button form="register_form" type="submit"">Change</button>
		</div>
		
	</body>
</html>
