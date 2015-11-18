<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- include Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

	<!-- end include Css -->

	<!-- include Javascript-->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<!-- end Javascript -->
	<meta charset="utf-8">
	<title>OurFace</title>
   
</head>

<body>
	<header>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">OurFace</a>
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
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Name</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Deconnexion</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>

	<div id="corps"  class="row">
		<div id="listeAmi" class="col-xs-offset-10 col-md-offset-10">
			<div id="friend" class="row friends">
				<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
				<span class="friendName">Araud quentin</span>
			</div>
			<div id="friend2" class="row friends">
				<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
				<span class="friendName">Pierre-Alexis Boccard</span>
			</div>
		</div>
				<!--     chat   Quentin araud -->
				
				<!--     fin chat    -->


			<!-- *****************  MUR Pierre-alexis Boccard  ******** -->
		<div class="row">
			<div class="col-md-7 col-md-offset-3">
				<form role="form" >
					<div class="form-group">
						<textarea class="form-cotnrol" rows="5">Entrez votre message</textarea>
						<div class="input-group-btn">
	                        <button class="btn btn-default btn-success" type="submit"><span class="glyphicon glyphicon-file"></span>Joindre</button>
	                    </div>
						<div class="input-group-btn">
	                        <button class="btn btn-default btn-primary" type="submit"><i class="">Publier</i></button>
	                    </div>
					</div>
				</form>	
			</div>
		</div>	

	</div>



	<footer>
	</footer>

</body>
</html>
