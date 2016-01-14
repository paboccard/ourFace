<?php 
	$user = utilisateurTable::getUserByIdentifiant($context->profile);
	$identifiant = $user->getIdentifiant();
	$name = $user->getNom();
	$prenom = $user->getPrenom();
	$statut = $user->getStatut();
	$avatar = $user->getAvatar();
	$dateDeNaissance = $user->getDateDeNaissance();

	//utilisateurTable::Avatar('image/truc.jpg');
?>

<div  class="row">
	<div id="picture-wall" class="col-md-offset-1 col-md-2">
		<button id="change-picture" class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-wrench"></i></button>
		<img src="images/test.jpg" alt="oui" class="img-rounded pictureWall" >
		
	</div>
	<form name="formTextAlbum" action="" method="POST" enctype="multipart/form-data">
		
					<input name="parcourirPhoto1" type="file" id="parcourir"/>
					<input name="valAlbum" type="submit" value="Valider"/>
		</form>
	<div id="name-wall" class=" col-md-offset-1 col-md-5">

		Idenfitiant : <?php echo $identifiant ; ?> <br>
		Nom : <?= $name ?><br>
		Prénom : <?=$prenom?><br>
		Né le : <?= date_format($dateDeNaissance, 'Y-m-d') ?> <br>
		<?= $avatar ?>
	</div>
			<?php
				if(isset($_POST['valAlbum']))
				{
					utilisateurTable::Avatar($_FILES['parcourirPhoto1']['name'],$_FILES['parcourirPhoto1']['type'],$_FILES['parcourirPhoto1']['size'],$_FILES['parcourirPhoto1']['tmp_name'],$_FILES['parcourirPhoto1']['error']);
				}
			
		?>
</div>