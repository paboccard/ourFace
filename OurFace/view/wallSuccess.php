<div class="">
	<div class="row area">
		<div class="col-lg-offset-4 col-lg-6 col-md-offset-3 col-md-8">
			<form role="form" >
				<div class="form-group">
					<textarea class="form-control" rows="5">Exprimez-vous...</textarea>
					<div class="col-lg-offset-5 col-lg-7 cancel-padding">
						<div class="btn-group btn-group-justified" role="group">
							<div class="btn-group">
								<button class="btn btn-default btn-warning" type="submit"><span class="glyphicon glyphicon-file"></span> Joindre</button>
							</div>
		                    <div class="btn-group">
		                		<button class="btn btn-default btn-primary" type="submit">Publier</button>
		                 	</div>
		                </div>
					</div>
				</div>
			</form>	
        </div>	
	</div>

	<?php 
	if ($msg = messageTable::getAllMessage()){
		foreach ($msg as $key) { 
	//for ($i = 1; $i <= 10; $i++) { 

	?> 
	<div class="row area">
		<div class="col-lg-offset-4 col-lg-6 col-md-offset-3 col-md-8">
			<form role="form" >
			<div class="form-group">
				<div>
					<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
					<span id="friend" class="friendName">
						<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant()."\">");
						echo utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant() ; 
						echo ('</a>');
						?>
					</span>
				</div>
				<textarea readonly class="form-control" rows="5"><?php echo postTable::getPostById($key->getPost())->getTexte() ;?></textarea>
					<div class="col-lg-offset-5 col-lg-7 cancel-padding">
						<div class="btn-group btn-group-justified" role="group">
							<div class="btn-group">
								<button class="btn btn-default btn-success" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime</button>
							</div>
                   			<div class="btn-group">
               					<button class="btn btn-default btn-primary" type="submit">Répondre</button>
               				</div>
    	     			</div>
					</div>
				</div>
			</form>
			</div>
	</div>
	<?php 
		} 
	} 
	?>

</div>