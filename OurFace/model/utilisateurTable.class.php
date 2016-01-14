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
	$post = $userRepository->findBy(array(), array('nom' => 'ASC'));	
	
	if ($post == false){
		echo 'Erreur sql';
	}
	return $post; 
}
public static function Avatar($name, $type, $size, $tmp_name, $error)
{
	

		if ($error > 0) $erreur = "Erreur lors du transfert";
	
		if ($size > $maxsize) $erreur = "Le fichier est trop gros";
		
		$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
			
		$extension_upload = strtolower(  substr(  strrchr($name, '.')  ,1)  );
		if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
		
		$image_sizes = getimagesize($tmp_name);
		if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";
  		$nom = "https://pedago02a.univ-avignon.fr/~uapv1104001/ourFace/images/";
  		$nom .= $name;
		
		$resultat = move_uploaded_file($tmp_name,"/home/etudiants/inf/uapv1104001/public_html/ourFace/images/".$name);
		if ($resultat) echo "Transfert réussi";
		$em = dbconnection::getInstance()->getEntityManager() ;
		$login = utilisateurTable::getUserByLoginAndPass($_SESSION['pseudo'],$_SESSION['mdp']);
		$login->setAvatar($nom);
		$em->flush();
}
		
		
}

?>
