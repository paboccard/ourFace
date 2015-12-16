<div class="col-lg-offset-3 col-lg-7 col-md-offset-2 col-md-9">
	

	<?php 
	include('exprimerMsg.php');
	if ($msg = messageTable::getAllMessage()){
		foreach ($msg as $key) { 
	//for ($i = 1; $i <= 10; $i++) { 

		include('listMessages.php');


		} 
	} 
	?>

</div>