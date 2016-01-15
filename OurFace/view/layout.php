<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- include Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/listFriend.css">
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
		<div class="container-fluid cancel-padding min-padding">
	<?php } else{ ?>
		<div class="container-fluid cancel-padding min-padding">
			<div class="col-lg-10 col-md-10 col-xs-10 cancel-padding">

	<?php }?>

			<div class="template">
			<?php include($template_view); ?>
			</div>
			<?php 
			if (isset($_SESSION['pseudo']))
			include('footer.php'); ?>
		</div>
			
			<?php 
				if (isset($_SESSION['pseudo'])){ ?>
					<div class="col-lg-2 col-md-2 col-xs-2 cancel-padding">
						<div class="">
					<?php 
					include('listFriend.php');} 
			?>
		</div>
		</div>
		</div>


</body>
</html>
