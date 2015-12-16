<div id="" class="listeFriend" > 
<!-- class="col-md-offset-10 col-md-3 cancel-padding" -->
	<div class="scrollable">
	<?php 
		if ($msg = utilisateurTable::getAllUsers()){
			foreach ($msg as $key) { 
		?> 

		<div class="row">
			<div id="friend" class="friends">
				<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
				<span class="friendName col-lg-10">
						<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".$key->getIdentifiant()."\">");
						echo $key->getIdentifiant() ; 
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