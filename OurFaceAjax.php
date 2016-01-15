
<?php

//nom de l'application
$nameApp = "OurFace";

// Inclusion des classes et librairies
require_once 'lib/core.php';
require_once $nameApp.'/controller/jsController.php';


//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))
	$action =  $_REQUEST['action'];

session_start();

$context = context::getInstance();
$context->init($nameApp);

$view=$context->executeActionAjax($action, $_REQUEST);

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if($view===false){
	echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas...";
	die;
}

//inclusion du layout qui va lui meme inclure le template view
elseif($view!=context::NONE){
	$template_view=$nameApp."/view/".$action.$view.".php";
	include($template_view);
	//include($nameApp."/view/".$context->getLayout().".php");
}

?>
