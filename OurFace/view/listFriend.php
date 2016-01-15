<div id="" class="listeFriend" > 
<!-- class="col-md-offset-10 col-md-3 cancel-padding" -->
	<div class="scrollable">
	<div id="moveFriend" class="glyphicon glyphicon-chevron-right"></div>
	<?php 
		if ($msg = utilisateurTable::getAllUsers()){
			foreach ($msg as $key) { 
		?> 

		<div class="row list">
			<div id="friend" class="friends">
				<?php if (strpos($key->avatar, "pedago") !== false){ ?>
				<img src="<?= $key->avatar ;?>" class="img-rounded friendPicture">
				<?php } else{ ?>
				<img src="images/noFace.jpg" alt="oui" class="img-rounded friendPicture"/>
				<?php 
				} ?>
				<span class="friendName col-lg-10">
						<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->getIdentifiant()."\">");
						echo $key->prenom.' '.$key->nom ; 
						echo ('</a>');
						?>
				</span>
			</div>
		</div>


	<?php 
		}
	}
	?>
	</div>

	<div id="search-friend" class="row">
		<div class"col-md-12 col-lg-12">		
			<form class="navbar-form cancel-padding" role="search">
		        <div class="input-group form-group-sm">
		            <input type="text" class="form-control" placeholder="Search" name="q">
		            <div class="input-group-btn">
		                <button class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		            </div>
		        </div>
		    </form>
        </div>
	</div>
</div>