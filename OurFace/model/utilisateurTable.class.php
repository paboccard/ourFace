<?php

/* Classe Outils en lien avec l'entité utilisateur
	composée de méthodes statiques
*/

class utilisateurTable {

public static function getUserByLoginAndPass($login,$pass){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('identifiant' => $login, 'pass' => sha1($pass)));	
	
	if ($user == false){
		echo 'Erreur sql';
	}
	return $user; 
}

public static function getUserById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('id' => $id));	
	
	if ($user == false){
		echo 'Erreur sql';
	}
	return $user; 
}

public static function getUserByIdentifiant($identifiant){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$user = $userRepository->findOneBy(array('identifiant' => $identifiant));	
	
	if ($user == false){
		echo 'Erreur sql';
	}
	return $user; 
}

public static function getAllUsers(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$userRepository = $em->getRepository('utilisateur');
	$post = $userRepository->findAll();	
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}


}

?>
