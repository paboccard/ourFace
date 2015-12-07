
<?php 
if (isset($_SESSION['pseudo']))
	include('wallSuccess.php'); 
else{
	echo '<p>Vous n\'êtes pas connecté !</p>' ;
	echo '<a href=ourFace.php?action=logout>Vonnectez vous !</a>';
}
?>