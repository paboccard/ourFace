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
	$msg = $msgRepository->findBy(array('emetteur' => $emetteur));	
	
	if ($msg == false){
		//echo 'Erreur sql';
	}
	return $msg; 
}

public static function getAllMessage(){
	$em = dbconnection::getInstance()->getEntityManager() ;

	//$post = $em->createQuery("select m from message m");

	$msgRepository = $em->getRepository('message');
	$msg = $msgRepository->findAll();	
	
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

	echo json_encode($msg);

	$msg->setAime(); // just change the name
	//$em->persist($msg);
	//$em->flush();
	return $msg;

}


}

?>
