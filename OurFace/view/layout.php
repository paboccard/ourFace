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
		<div class="container col-lg-12 col-md-12 col-xs-12">
	<?php } else{ ?>
		<div class="container col-lg-10 col-md-10 col-xs-10">
			<div class="jumbotron">

	<?php }?>

			<?php include($template_view); ?>
			<?php 
			if (isset($_SESSION['pseudo']))
			include('footer.php'); ?>
		</div>
</div>			
			<?php 
				if (isset($_SESSION['pseudo'])){ ?>
					<div class="container col-lg-2 col-md-2 col-xs-2 cancel-padding">
						<div class="jumbotron">
					<?php 
					include('listFriend.php');} 
			?>
		</div>
		</div>


</body>
</html>
