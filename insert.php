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
            $servername="localhost";
            $username="root";
            $password="";
            $database="guvi";
            
            $conn = new mysqli($servername,$username,$password,$database);
            if($conn->connect_error){
                    die("Connection failed: " .$conn->connect_error);
            }
            
            $sql="INSERT INTO user VALUES('".$_POST["mail_id"]."','".$_POST["password"]."','".$_POST["user_name"]."','".$_POST["dob"]."','".$_POST["city"]."')";
                if ($conn->query($sql) === TRUE) {
                     echo "<center class='register' style='color:white;font-size: 17px;font-weight : bold;'>";
                        echo "Welcome ";
                        echo $_POST["user_name"];
                        echo "<br><br>";
                        echo "<form id=\"res\"action=\"login.php\" method=\"POST\"><input type=\"hidden\" name=\"mail_id\" value=\"".$_POST["mail_id"]."\"></form>";
                        echo("<button form=\"res\" type=\"submit\">Continue</button>");
                        echo "</center>";
                }
                else{
                if(mysqli_error($conn) === "Duplicate entry '".$_POST["mail_id"]."' for key 'PRIMARY'")
                     echo "<center class='register' style='color:white;font-size: 17px;font-weight : bold;'>";
                        echo "Mail-ID already exists....";
                        echo "<br><br>";
                        echo "<form id=\"res\"action=\"register.php\" method=\"POST\"><input type=\"hidden\" name=\"mail_id\" value=\"".$_POST["mail_id"]."\"></form>";
                        echo("<button form=\"res\" type=\"submit\">Back</button>");
                        echo "<br><br>";
                        echo "<form id=\"re\"action=\"login.php\" method=\"POST\"><input type=\"hidden\" name=\"mail_id\" value=\"".$_POST["mail_id"]."\"></form>";
                        echo("<button form=\"re\" type=\"submit\">OK</button>");
                        echo "</center>";
                }

            $conn->close();
        ?>

        
    </body>
</html>
