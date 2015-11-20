<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class postTable{

  public static function getPostById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('post');
	$post = $userRepository->findBy(array('id' => $id));	
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}


}

?>
