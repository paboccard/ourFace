
<?php 
if (isset($_SESSION['pseudo']))
	include('wallSuccess.php'); 
else{
	include('callLoginSuccess.php');
}
?>
