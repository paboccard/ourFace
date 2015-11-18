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
			if ($login = utilisateurTable::getUserByLoginAndPass($_POST['pseudo'],$_POST['pass']))
				return context::NONE;
			else 
				return context::ERROR;
		}catch (Exception $e){
	       	die('Erreur : ' . $e->getError());
		}
	}
	else 
		return context::SUCCESS;
}

}
