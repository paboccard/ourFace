<div class="">
	<div class="row area">
		<div class="col-lg-offset-4 col-lg-7 col-md-offset-3 col-md-9">
			<form role="form" >
				<div class="form-group">
					<div class="box">
					    <textarea id="status" class"form-control" rows="5">Exprimez-vous...</textarea>
					    <hr/>
							<div class="btn-group pull-left" role="group">
								<div class="btn-group">
									<button class="btn btn-msg msg-color-insert" type="submit"><span class="glyphicon glyphicon-file"></span> Joindre</button>
								</div>
							</div>
							<div class="btn-group pull-right" role="group">
		                    	<div class="btn-group">
		                			<button class="btn btn-msg msg-color-com" type="submit">Publier</button>
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
		<div class="col-lg-offset-4 col-lg-7 col-md-offset-3 col-md-9">
			<form role="form" >
				<div class="form-group">
					<div class="box">
						<div id="friend" class="friends">
						    <img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
						    <span id="friend" class="friendName">
								<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant()."\">");
								echo utilisateurTable::getUserById($key->getEmetteur())->getIdentifiant() ; 
								echo ('</a>');
								?>
							</span>
						</div>
					    <textarea readonly id="status" class"form-control" rows="0"><?php echo postTable::getPostById($key->getPost())->getTexte() ;?></textarea>
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
	</div>
	<?php 
		} 
	} 
	?>

</div>