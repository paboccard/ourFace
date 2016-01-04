<?php
// Inclusion de la classe utilisateur
//require_once "utilisateur.class.php";
// Classe definissant les methodes associees a la table utilisateur (fille de Doctrine_Table)
class messageTable{

  public static function getMessageById($id){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findBy(array('id' => $id));	
	
	if ($msg == false){
		echo 'Erreur sql';
	}
	return $msg; 
}

  public static function getMessageByEmetteur($emetteur){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findBy(array('emetteur' => $emetteur), array('id' => 'DESC'));	
	$msg += $msgRepository->findBy(array('destinataire' => $emetteur), array('id' => 'DESC'));	
	
	if ($msg == false){
		//echo 'Erreur sql';
	}
	return $msg; 
}

public static function getAllMessage(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	//$post = $em->createQuery("select m from message m");

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findBy(array(), array('id' => 'DESC'));
	//$msg = $msgRepository->findAll();
	
	if ($msg == false){
		echo 'Erreur sql';
	}

	return $msg;
}

public static function setAime($id){

	//$em->update('message', array('id' => $id), array('aime' => 2));
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findOneBy(array('id' => $id));	

	$msg->setAime();
	//$em->persist($msg);
	$em->flush();
	return $msg;

}

public static function publierMessage($message, $emetteur, $destinataire){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$loginEmetteur = utilisateurTable::getUserByIdentifiant($emetteur);
	$loginDestinataire = utilisateurTable::getUserByIdentifiant($destinataire);
	$post = new post();
	$post->setTexte($message);
	$post->setDate(new DateTime());
	$post->setImage(null);
	$newMessage = new message();
	$newMessage->setEmetteur($loginEmetteur);
	$newMessage->setDestinataire($loginDestinataire);
	$newMessage->setParent($loginEmetteur);
	$newMessage->setPost($post);
	$newMessage->setAime(-1);

	$em->persist($newMessage);
	$em->flush($newMessage);
}


}

?>
