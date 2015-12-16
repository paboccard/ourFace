<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class postTable{

  public static function getPostById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('post');
	$post = $userRepository->findOneBy(array('id' => $id));	
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}


public static function getAllPost(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	//$post = $em->createQuery("select u, p, m from post p, utilisateur u, message m where u.id = m.id and m.emetteur=u.id");

	//$result = $post->getResult();
	$postRepository = $em->getRepository('post');
	$post = $postRepository->findAll();	
	
	if ($result == false){
		echo 'Erreur sql';
	}
	return $result;
}


}

?>
