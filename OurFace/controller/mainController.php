<?php
/*
 * All doc on :
 * Toutes les actions disponibles dans l'application 
 *
 */

class mainController{

public static function helloWorld($request,$context){
	$context->mavariable="hello world";
	return context::SUCCESS;
}


public static function index($request,$context){
		
	return context::SUCCESS;
}

public static function superTest($request,$context){
		if (!empty($request['param1']) && !empty($request['param2']))
		{
			$context->mavariable1=$request['param1'];
	    	$context->mavariable2=$request['param2'];
	    	return context::SUCCESS;
		}
		else 
			return context::ERROR;
}

public static function login($request,$context){
		
	if (!empty($_POST['pseudo']) && !empty($_POST['pass'])){
		try{
			if ($login = utilisateurTable::getUserByLoginAndPass($_POST['pseudo'],$_POST['pass'])){
				$_SESSION['pseudo'] = $_POST['pseudo'];
				$_SESSION['mdp'] = $_POST['pass'];
				return context::SUCCESS;
			}
			else 
				return context::ERROR;
		}catch (Exception $e){
	       	die('Erreur : ' . $e->getError());
		}
	}
	else 
		return context::NONE;
}

public static function callLogin($request,$context){		
	if (!isset($_SESSION['pseudo']))
		return context::SUCCESS;
	else{
		session_unset();
		session_destroy();
		session_start();
		return context::SUCCESS;
	}
}

public static function myWall($request,$context){
	if (!empty($request['profile'])){
		$context->profile=$request['profile'];
		if ($msg = utilisateurTable::getUserByIdentifiant($context->profile))
			return context::SUCCESS;
		else
			return context::ERROR;
	}
	else
		return context::ERROR;
}

public static function myWallUpLike($request,$context){
	if (!empty($request['id'])){
		$id=$request['id'];
		if ($msg = messageTable::setAime($id))
			return context::SUCCESS;
		else
			return context::ERROR;
	}
	else
		return context::ERROR;
}

}
