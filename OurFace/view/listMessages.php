<div class="row area">
		<form role="form" method="POST" action="">
			<div class="form-group">
				<div class="box">
					<div class="separator">
						<div class="row">
							<div id="friend" class="friends">
							    <img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
							    <span id="friend" class="friendName col-lg-11">
									<?php 
									if ($key->emetteur != null){
										//echo $key->getId() ; 
										echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->emetteur->identifiant."\">");
										echo $key->emetteur->identifiant ; 
										echo ('</a>');
									}
									else 
										echo 'anonyme';
									?>
									->
									<?php 
									if ($key->getDestinataire() != null){
										echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->destinataire->identifiant."\">");
										echo $key->destinataire->identifiant ; 
										echo ('</a>');
									}
									else
										echo 'anonyme';
									?> 
								</span>
							</div>
						</div>
					</div>
					<div class="row">
				    	<span id="status" class"form-control">
				    		<?php 
							if ($key->getPost() != null){
					    		echo postTable::getPostById($key->getPost())->getTexte() ;
					    	}
					    	else 
					    		echo 'aucun texte';
					    	?>
					    </span>
					</div>
				    <hr/>

						<div class="btn-group pull-left" role="group">
							<div class="btn-group">
								<div class="btn-group">
									<input type="hidden" name="idPost" value='<?= $key->getId() ; ?>'>
									<button class="btn btn-msg msg-color-like" type="submit" name="like" ><span class="glyphicon glyphicon-thumbs-up"></span> J'aime <?php echo $key->getAime(); ?></button>
								</div>
								<?php
									/*echo ("<a href=\"OurFace.php?action=myWallUpLike&id=".$key->getId()."\">"); //.utilisateurTable::getUserById($key->getDestinataire())->getIdentifiant()."\">"); 								<button formaction="OurFace.php?action=myWallUpLike&id=6" formmethod="get" class="btn btn-msg msg-color-like" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime <?php echo $key->getAime(); </button>
									?>	<span class="glyphicon glyphicon-thumbs-up"></span>
									<?php echo "J'aime ".$key->getAime();
									echo "</a>";*/
									?>
							</div>
						</div>
						<div class="btn-group pull-right" role="group">
                   			<div class="btn-group">
               					<button class="btn btn-msg msg-color-com" type="submit">Commenter</button>
               				</div>
				    	</div>
				</div>
			</div>
		</form>
</div>