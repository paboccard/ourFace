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


	<?php 
	if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo']))
		include('headerConnect.php'); 
	else
		include('headerNoConnect.php'); ?>

	<?php if (!isset($_SESSION['pseudo'])){ ?>
<<<<<<< HEAD
		<div class="container-fluid cancel-padding min-padding">
	<?php } else{ ?>
		<div class="container-fluid cancel-padding min-padding">
			<div class="col-lg-10 col-md-10 col-xs-10 cancel-padding">
=======
		<div class="container col-lg-12 col-md-12 col-xs-12">
	<?php } else{ ?>
		<div class="container col-lg-10 col-md-10 col-xs-10">
			<div class="jumbotron">
>>>>>>> e8d857496278b2f8b2298e2e09e7efa0d4837423

	<?php }?>

			<?php include($template_view); ?>
			<?php 
			if (isset($_SESSION['pseudo']))
			include('footer.php'); ?>
		</div>
<<<<<<< HEAD
			
			<?php 
				if (isset($_SESSION['pseudo'])){ ?>
					<div class="col-lg-2 col-md-2 col-xs-2 cancel-padding">
						<div class="">
=======
</div>			
			<?php 
				if (isset($_SESSION['pseudo'])){ ?>
					<div class="container col-lg-2 col-md-2 col-xs-2 cancel-padding">
						<div class="jumbotron">
>>>>>>> e8d857496278b2f8b2298e2e09e7efa0d4837423
					<?php 
					include('listFriend.php');} 
			?>
		</div>
		</div>
<<<<<<< HEAD
		</div>
=======
>>>>>>> e8d857496278b2f8b2298e2e09e7efa0d4837423

</body>
</html>
