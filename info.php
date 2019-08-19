<?php include('server.php');

	$tunniste = $_SESSION['username'];
	$newpassword = $_POST['password_3'];
	
	 $result = mysql_query("SELECT password FROM users WHERE 
		username='$tunniste'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect password";
        }
        if($newpassword==$confirmnewpassword)
        $sql=mysql_query("UPDATE users SET password='$newpassword' where 

 username='$tunniste'");
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }

	

/*	$db = mysqli_connect('localhost', 'root', '', 'asiakas_db');
	
	$haku = "UPDATE users SET username = $_POST['username'] ";
	$result1 = mysqli_query($db, $haku);
	$user1 = mysqli_fetch_array($result1);
	
	
	
 $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result); 
	
	echo $result1['username'];
//	$tunniste = $_SESSION['username'];
	//$tunniste2 = $_SESSION['password_3'];
	
 /* $data = "select * from users where username = $tunniste;"

  $query = mysql_query($data);
  
  $data2 = mysql_fetch_array($query);*/
?>


<!DOCTYPE html>
<html>
<head>
  <title>Muuta tietojasi</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Muuta tietojasi</h2>
  </div>
	 
  <form method="post" action="info.php">
  
  <div class="input-group">
  		<label>Nykyinen käyttäjänimi</label>
  		<input type="text" name="username" value="<?php   ?>" >
  	</div>
	
	<div class="input-group">
  		<label>Nykyinen salasana</label>
  		<input type="password" name="newpass"value="<?php  ?>">
  	</div>
	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" value="<?php  ?>" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password_3">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="info_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>