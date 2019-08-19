<?php include_once('index.php');

$query = "UPDATE tilaukset SET nimi='".($_POST['tyonimi'])."', status = '".$_POST['tyotila']."', tekija = '".$_POST['tekija']."' WHERE id= '".$row['id']."'";

	if (isset($_POST['update']))
	 {
		 if($row['status'] != "Tilattu")
		 {
				//= '".$row[id]."'";
		$result = $conn->query($query);
		 }
		 else
		 {
			 echo "et voi muuttaa tilausta jos se ei ole Tilattu-tilassa";
		 
		 }
	 }
	 


?>