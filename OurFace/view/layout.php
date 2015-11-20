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

	<?php include('header.php'); ?>

	<div class="container-fluid">
		<div  class="row">

				<!-- *****************  MUR Pierre-alexis Boccard  ******** -->
			<?php include('wall.php'); ?>

				<!-- *****************  Liste Amis Quentin Araud  ******** -->
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
