<?php include_once('index.php');

			$conn = new mysqli("localhost", "root","" , "asiakas_db");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	

		if(isset($_POST['delete'])) {
    $deletequery = ("DELETE FROM tilaukset WHERE id ='$_POST[id]'");
    mysql_query($deletequery, $conn);  
}
?>