<header class"min-height">
	<nav class="navbar navbar-blue navbar-fixed-top">
	  <div class="container container_header">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="OurFace.php?action=index">OurFace</a>
	    </div>
	    <div class="col-sm-3 col-md-3 pull-left">
            <form class="navbar-form" role="search">
                <div class="input-group form-group-sm">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
    	</div>    
	    <div>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="OurFace.php?action=index"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
	        <li>
	        	<?php echo ("<a href=\"OurFace.php?action=myWall&profile=".$_SESSION['pseudo']."\">");?> <!-- on link avec le pseudo -->
				<span class="glyphicon glyphicon-user"></span> 
				<?php echo $_SESSION['pseudo'] ; ?> <!-- on ecrit le pseudo à côté de l'icône home -->
				</a>
			</li>
	        <li><a href="OurFace.php?action=callLogin"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
</header>