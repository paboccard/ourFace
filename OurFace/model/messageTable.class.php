<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class messageTable{

  public static function getMessageById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('message');
	$msg = $userRepository->findBy(array('id' => $id));	
	
	if ($msg == false){
		echo 'Erreur sql';
	}
	return $msg; 
}


}

?>
