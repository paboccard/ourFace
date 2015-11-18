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

	<div class="container-fluid">
		<div  class="row">




				<!-- *****************  MUR Pierre-alexis Boccard  ******** -->
			<div class="col-md-10">
				<div class="row area">
					<div class="col-md-offset-4 col-md-6">
						<form role="form" >
							<div class="form-group">
								<textarea class="form-control" rows="5">Entrez votre message</textarea>
								<div class="col-md-offset-5 col-md-7 cancel-padding">
									<div class="btn-group btn-group-justified" role="group">
										<div class="btn-group">
											<button class="btn btn-default btn-warning" type="submit"><span class="glyphicon glyphicon-file"></span> Joindre</button>
										</div>
					                    <div class="btn-group">
					                		<button class="btn btn-default btn-primary" type="submit"><i class="">Publier</i></button>
					                 	</div>
					                </div>
								</div>
							</div>
						</form>	
			        </div>	
				</div>


				<div class="row area">
					<div class="col-md-offset-4 col-md-6">
						<form role="form" >
							<div class="form-group">
								<div>
									<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
									<span class="friendName">Araud quentin</span>
								</div>
								<textarea readonly class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae ante mauris. Sed auctor, dui eu semper sodales, eros massa accumsan magna, id fermentum elit nibh.</textarea>
								<div class="col-md-offset-5 col-md-7 cancel-padding">
									<div class="btn-group btn-group-justified" role="group">
										<div class="btn-group">
											<button class="btn btn-default btn-success" type="submit"><span class="glyphicon glyphicon-thumbs-up"></span> J'aime</button>
										</div>
					                    <div class="btn-group">
					                		<button class="btn btn-default btn-primary" type="submit"><i class="">Répondre</i></button>
					                 	</div>
					          	     </div>
								</div>
							</div>
						</form>	
			        </div>	
				</div>
			</div>

			<div id="corps" class="col-md-2 cancel-padding">
				<div id="listeAmi" class="">
					<div id="friend" class="row friends">
						<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
						<span class="friendName">Araud quentin</span>
					</div>
					<div id="friend2" class="row friends">
						<img src="images/test.jpg" alt="oui" class="img-rounded friendPicture">
						<span class="friendName">Pierre-Alexis Boccard</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
	</footer>

</body>
</html>
