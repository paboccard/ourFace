<div class="row area">
		<form role="form" >
			<div class="form-group">
				<div class="box">
					<div class="separator">
						<div class="row">
							<div id="friend" class="friends">
							    <img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
							    <span id="friend" class="friendName col-lg-11">
									<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant()."\">");
									echo utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant() ; 
									echo ('</a>');
									?>
									->
									<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".utilisateurTable::getUserById($key->getDestinataire())->getIdentifiant()."\">");
									echo utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant() ; 
									echo ('</a>');
									?> 
								</span>
							</div>
						</div>
					</div>
					<div class="row">
				    	<span id="status" class"form-control"><?php echo postTable::getPostById($key->getPost())->getTexte() ;?></span>
					</div>
				    <hr/>

						<div class="btn-group pull-left" role="group">
							<div class="btn-group">
								<button class="btn btn-msg msg-color-like" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime <?php echo $key->getAime(); ?></button>
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