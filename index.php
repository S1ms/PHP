<?php include('server.php');
   

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
	
	$tunniste =	$_SESSION['username'];

	if (isset($_SESSION['username'])) : ?>
    	<a href='changepass.php'><?php echo $tunniste, " : Tilin asetukset" ?></a>
    	
    <?php endif ?>
<div class="header">
	<h2>Tilaukset</h2>
</div>

<div>
<?php
		$conn = new mysqli("localhost", "root","" , "asiakas_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$sql = "SELECT * FROM tilaukset WHERE tekija ='$tunniste'";
	$result = $conn->query($sql);
	$query1  = "SELECT * FROM users";
	$result1 = $conn->query($query1);
	

	
	if ($result->num_rows> 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["nimi"] . " - </td><td> " . $row["status"] . " - </td></tr><td> " . $row["tekija"] ."</td><td value='. $row[id].'> <a href=delete.php?del=".$row['id'].">Poista</a><a href=update.php?del=".$row['id']."> - Muuta </a></td><br/>";

		}
		echo "</table>";
	}
	else {
		echo "0 result";
	}

/*	
	while ($row = $result1-> fetch_assoc()) {
    echo "  To delete user   <b>" . $row['username'] . "</b>  Click on the number <input type='submit' name='delete' value='" . $row['id'] . "' /><br/>";
}

(isset($_GET['delete'])) {
    $delet_query = "DELETE * FROM tilaukset WHERE id = '".$row[id]."'";
	$result2 = $conn->query($delete_query);

    if ($delet_query) {
        echo "Onnistui";
    }
}
*/

?>
</div>

<div class="content">
  	
	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>