<!DOCTYPE html>
<html>
<head>
	<meta language="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Tourism</title>
</head>
<body>
		<header>
			<br>
			<h1>Tour Guide</h1>
			<br>
			<br>
		</header>


		<center>

        <?php
            echo "<input form=\"sea_by\" type=\"hidden\" name=\"mail_id\" value=\"".$_POST["mail_id"]."\">";
            $servername="localhost";
            $username="root";
            $password="";
            $database="guvi";
            
            $conn = new mysqli($servername,$username,$password,$database);
            if($conn->connect_error){
                    die("Connection failed: " .$conn->connect_error);
            }

            echo "<table id='list' border='1'>
            <tr>
            <th>Mail Id</th>
            <th>User Name</th>
            <th>DOB</th>
            <th>City</th>
            </tr>";

            $sql = "select * from user where mail_id='".$_POST["mail_id"]."'";    
            
            $result=$conn->query($sql);
            while($row=mysqli_fetch_array($result)){
                
                echo "<tr>";
                echo "<td>" . $row['mail_id'] . "</td>";
                echo "<td>" . $row['user_name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
        


    </body>
</html> 
 
