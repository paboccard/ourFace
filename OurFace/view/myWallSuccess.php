<?php 
	$user = utilisateurTable::getUserByIdentifiant($context->profile);
	$id = $user->getId();
	$identifiant = $user->getIdentifiant();
	$name = $user->getNom();
	$prenom = $user->getPrenom();
	$statut = $user->getStatut();
	$avatar = $user->getAvatar();
	$dateDeNaissance = $user->getDateDeNaissance();
?>

<div>
	<div  class="row area">
		<div id="picture-wall" class="col-md-offset-1 col-md-2">
			<button id="change-picture" class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-wrench"></i></button>
			<img src="images/test.jpg" alt="oui" class="img-rounded pictureWall" >
		</div>
		<div id="name-wall" class=" col-md-offset-1 col-md-5">

			<?php echo $identifiant ; ?> <br>
			Né le : 15/07/1989 <br>
			Nationalité : Francaise <br>
		</div>
	</div>
		<hr/>

		<div class="col-lg-offset-3 col-lg-7 col-md-offset-2 col-md-9">
	<?php 
		include('exprimerMsg.php');

		if ($msg = messageTable::getMessageByEmetteur($id)){
			foreach ($msg as $key) { 
		//for ($i = 1; $i <= 10; $i++) { 

		include('listMessages.php');
			} 
		} 
	?>
	</div>
</div>
