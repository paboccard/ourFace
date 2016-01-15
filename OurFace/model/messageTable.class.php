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
	$msg2 = $msgRepository->findBy(array('destinataire' => $emetteur), array('id' => 'DESC'));

	foreach ($msg2 as $key) {
		$isPresent = false;
		foreach ($msg as $value) {
			if ($value->id == $key->id){
				$isPresent = true;
			}
		}
		if (!$isPresent)
			array_push($msg,$key);
		
	}

	usort($msg, function($a, $b) {
		if ($a->post != null && $b->post != null)
	  		return ($a->post->date > $b->post->date) ? -1 : 1;
	});	
	if ($msg == false){
		//echo 'Erreur sql';
	}
	return $msg;
	//return array_slice($msg, 0, 10); ; 
}

  public static function getMessageByEmetteurWithNumber($identifiant,$nb){
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepostitoryUser = $em->getRepository('user');
	$idUser = utilisateurTable::getUserByIdentifiant($identifiant)->id;

	$msgRepository = $em->getRepository('message');

	$msg = $msgRepository->findBy(array('emetteur' => $idUser), array('id' => 'DESC'));	
	$msg2 = $msgRepository->findBy(array('destinataire' => $idUser), array('id' => 'DESC'));

	foreach ($msg2 as $key) {
		$isPresent = false;
		foreach ($msg as $value) {
			if ($value->id == $key->id){
				$isPresent = true;
			}
		}
		if (!$isPresent)
			array_push($msg,$key);
		
	}

	usort($msg, function($a, $b) {
  		return ($a->post->date > $b->post->date) ? -1 : 1;
	});	
	if ($msg == false){
		//echo 'Erreur sql';
	}
	//return $msg;
	return array_slice($msg, 0, $nb); 
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

public static function getMessageNumber($number){
	$em = dbconnection::getInstance()->getEntityManager() ;

	//$post = $em->createQuery("select m from message m");

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findBy(array(), array('id' => 'DESC'), $number, 0);
	//$msg = $msgRepository->findAll();
	if ($msg == false){
		echo 'Erreur sql on getMessageNumber';
	}

	return $msg;
}

public static function setAime($id){

	//$em->update('message', array('id' => $id), array('aime' => 2));
	$em = dbconnection::getInstance()->getEntityManager() ;

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findOneBy(array('id' => $id));	

	$msg->setAimePlusOne();
	//$em->persist($msg);
	$em->flush();
	return $msg->aime;

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
	$newMessage->setAime();

	$em->persist($newMessage);
	$em->flush($newMessage);
}


}

?>
