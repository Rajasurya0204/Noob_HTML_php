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
        <?php
            $flag = 0;
            $servername="localhost";
            $username="root";
            $password="";
            $database="guvi";
            
            $conn = new mysqli($servername,$username,$password,$database);
            if($conn->connect_error){
                    die("Connection failed: " .$conn->connect_error);
            }
            
            $sql = "select * from user";
            $result=$conn->query($sql);
            while($row=mysqli_fetch_array($result)){
                if($_POST["mail_id"] === $row["mail_id"]){
                    if($_POST["password"] === $row["password"]){
                        echo "<center class='register' style='color:white;font-size: 17px;font-weight : bold;'>";
                        echo "Welcome ";
                        echo $row["user_name"];
                        echo "<br><br>";
                        echo "<form id=\"res\"action=\"details.php\" method=\"POST\"><input type=\"hidden\" name=\"mail_id\" value=\"".$row["mail_id"]."\"></form>";
                        echo("<button form=\"res\" type=\"submit\">Continue</button>");
                        echo "</center>";
                    }
                    else{
                        echo "<center class='register' style='color:white;font-size: 17px;font-weight : bold;'>";
                        echo "Invalid  Password<br><br>";
                        echo("<button onclick=\"location.href='login.php'\">Back</button>");
                        echo "</center>";
                    }
                    $flag=1;
                }
            }
            if($flag === 0){
                        echo "<center class='register' style='color:white;font-size: 17px;font-weight : bold;'>";
                        echo "Invalid User<br><br>";
                        echo("<button onclick=\"location.href='login.php'\">Back</button>");
                        echo "</center>";  
            }
            $conn->close();
        ?>
 
	</body>
</html>
