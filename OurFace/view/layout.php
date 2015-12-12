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


	<div class="container-fluid">
		<div  class="row">


			<?php 
				if (isset($_SESSION['pseudo']))
					include('listFriend.php'); 
			?>
			<?php include($template_view); ?>


		</div>
	</div>

	<?php 
		if (isset($_SESSION['pseudo']))
			include('footer.php'); ?>


</body>
</html>
