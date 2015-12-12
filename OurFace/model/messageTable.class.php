<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class messageTable{

  public static function getMessageById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findBy(array('emetteur' => $id));	
	
	if ($msg == false){
		echo 'Erreur sql';
	}
	return $msg; 
}

public static function getAllMessage(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findAll();	
	
	if ($msg == false){
		echo 'Erreur sql';
	}
	return $msg; 
}


}

?>
