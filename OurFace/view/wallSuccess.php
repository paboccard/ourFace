<div class="col-md-10">
	<div class="row area">
		<div class="col-md-offset-4 col-md-6 ">
			<form role="form" >
				<div class="form-group">
					<textarea class="form-control" rows="5">Exprimez-vous...</textarea>
					<div class="col-md-offset-5 col-md-7 cancel-padding">
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
	if ($msg = postTable::getAllPost()){
		foreach ($msg as $key) { 
	//for ($i = 1; $i <= 10; $i++) { 
	?> 
			<div class="row area">
				<div class="col-md-offset-4 col-md-6">
					<form role="form" >
					<div class="form-group">
						<div>
							<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
							<span id="friend" class="friendName"><?php $key->id;?></span>
						</div>
						<textarea readonly class="form-control" rows="5"><?php $key->texte;?></textarea>
							<div class="col-md-offset-5 col-md-7 cancel-padding">
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