<!DOCTYPE html>
<html>
	<head>
		<title>Guvi</title>
		<link rel="stylesheet" href="./login.css">
	</head>
	<body onload="assign()">
		<div id="register">
		<h1>Register</h1>
		<form id="register_form" method="POST">
			<input type="email" name="mail_id" placeholder="Email ID"><br>
			<input id="pass_word" type="password" name="password" placeholder="Password"><br>
			<input id="user_name" type="text" name="user_name" placeholder="Your Name"><br>
			<input type="date" name="dob" placeholder="Date of Birth"><br>
			<input type="text" name="city" placeholder="City"><br>
		</form>
		<button form="register_form" type="submit" onclick="check()">Register</button>
		</div>
		
		<script type="text/javascript" >
            var password;
            var username;
            function assign(){
                password = document.getElementById("pass_word");
                username = document.getElementById("user_name");
            }

            function check(){
                var pass=password.value;
                var name=username.value;
                console.log(pass);
                var i=0;
                var count_sc=0;
                var flag_cap=0;
                var flag_start=0;
                var character='';
                var format = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
                while(i<=pass.length){
                    character=pass.charAt(i);
                    var char=character;
                        if (i==1 && (isNaN(char * 1)) && !((format.test(character)))){
                            flag_start=1;
                        }
		
                        if(/[A-Z]/.test(character)) {
                            flag_cap=1;
                        }
                        if((format.test(character))){	
                            count_sc++;
                        }
    	
                        i++;
            }
                var success_flag=1;
                var text=""
            if(flag_start == 0){
                text=text.concat("Password should start with alphabet");
                success_flag=0;
            }  
            if(flag_cap == 0){
                text=text.concat("\nPassword should contain atleast one Capital letter");
                success_flag=0;
            }
            if(count_sc < 2 ){
                text=text.concat("\nPassword should contain atleast two special character");
                success_flag=0;
            }
            if(i>16 || i<6){
                text=text.concat("\nPassword should be of minimum 6 characters and maximum 16 characters");
                success_flag=0;
            }

            if(success_flag==1){
                text=text.concat("\nSuccessfull");
                document.getElementById("register_form").action="insert.php";
            }

            alert(text);
        }

        function inside(){
            document.getElementById("sub_but").innerText="Sure";
        }

        function outside(){
            document.getElementById("sub_but").innerText="Register";
        }


		</script>
		   

	</body>
</html>

