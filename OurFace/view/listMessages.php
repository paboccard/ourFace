<div class="row area" id="listMessage">
			<div class="form-group">
				<div class="box">
					<div class="separator">
						<div class="row">
							<div id="friend" class="friends">
							    <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <?php 
                                        if ($key->emetteur != null){
                                        if (strpos($key->emetteur->avatar, "pedago") !== false){ ?>
							    	<img src=<?php echo "\"".$key->emetteur->avatar."\"" ;?> alt="oui" class="col-lg-2 img_emetteur">
							    	<?php } else{ ?>
							    	<img src="images/noFace.jpg" alt="oui" class="col-lg-2 img_emetteur"/>
									<?php 
									} }?>
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <?php 
									
									if ($key->emetteur != null){
										//echo $key->getId() ; 
										echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->emetteur->identifiant."\">");
										echo $key->emetteur->prenom ; 
										echo ' ' .$key->emetteur->nom ; 
										echo (' </a>');
										echo "<p class=\"statut\" > " .$key->emetteur->statut. "</p>";
									}
									else 
										echo 'anonyme';
									?>
									<p class="glyphicon glyphicon-menu-right"></p>
									<?php 
									if ($key->getDestinataire() != null){
										
										echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->destinataire->identifiant."\">");
										echo ' ' .$key->destinataire->prenom ; 
										echo ' ' .$key->destinataire->nom ;  
										echo (' </a>');
										echo "<p class=\"statut\" > " .$key->destinataire->statut. "</p>";
									}
									else
										echo 'anonyme';
									if ($key->post != null){
									?> 
                                    <p class="posted text-muted"><i class="fa fa-clock-o"></i> <small><?php echo date_format($key->post->date,"F d, Y "); echo 'at '; echo date_format($key->post->date,"H:i"); ?></small></p>
                                    <p><?php
                                    
				    			if ($key->post->image != "" && strpos($key->post->image, "pedago") !== false){
				    			echo "<img class=\"img-responsive\" src=\"".$key->post->image."\"/>";
				    		}
				    			if ($key->post != null){
					    		echo "<p class=\" \" >".$key->post->texte."</p>" ;
					    		}
					    		else 
					    			echo '<p>aucun texte</p>';
				    		}else{
								if ($key->post != null){
					    			echo "<p class=\"\" >".$key->post->texte."</p>" ;
					    		}
					    		else 
					    			echo '<p>aucun texte</p>';
					   	 	}
					    	?></p>
 
                                </div>




							</div>
						</div>
					</div>
				    <hr/>

						<div class="btn-group pull-left" role="group">
							<div class="btn-group">
								<div class="btn-group">
									<button class="btn btn-msg msg-color-like btn_like" name="like" id="<?= $key->id ; ?>" ><span class="glyphicon glyphicon-thumbs-up"></span> J'aime <?php echo $key->getAime(); ?></button>
								</div>
							</div>
						</div>
				</div>
			</div>
</div>