<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
//require_once "chat.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class chatTable{

  public static function getChats(){
	$em = dbconnection::getInstance()->getEntityManager() ;
		$userRepository = $em->getRepository('chat');
	$msg = $userRepository->findAll();	
	
	if ($msg == false){
		echo 'Erreur sql';
	}
	return $msg; 
}

	public static function setChats($message)
	{

		$em = dbconnection::getInstance()->getEntityManager() ;
		$login = utilisateurTable::getUserByLoginAndPass($_SESSION['pseudo'],$_SESSION['mdp']);
		$new_message_post = new post();
		$new_message_post->setTexte($message);
		$new_message_post->setDate(new DateTime());
		$new_message_post->setImage(null);
		$new_message_chat = new chat();
		$new_message_chat->setPost($new_message_post);
		$new_message_chat->setEmetteur($login);
		
		$em->persist($new_message_chat);
		$em->flush();

	}

}

?>
