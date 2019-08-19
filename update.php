<?php include_once('index.php');

	


?>
 <h2>Muuta työn tietoja</h2>
 <form method="post" action="update2.php">
  	<div class="input-group">
  		<label>Työn tekijä</label>
  		<input type="text" name="tekija" >
  	</div>
  	<div class="input-group">
  		<label>Työn nimi</label>
  		<input type="text" name="tyonimi">
  	</div>
	  	<div class="input-group">
  		<label>Työn tila</label>
  		<input type="text" name="tyotila">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="update">Muuta</button>
  	</div>

  </form>

