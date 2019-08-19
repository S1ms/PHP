<?php
include('server.php');

$dbhost = "localhost";
$dbname = "asiakas_db";
$dbuser = "root";
$dbpass = "";
//Connect to database
		$db = mysqli_connect('localhost', 'root', '', 'asiakas_db');
        $username = $_SESSION['username'];

		$sql = "SELECT password FROM users WHERE login='$username'";
		
		
        $result = mysql_query($db,$sql);
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        

      ?>