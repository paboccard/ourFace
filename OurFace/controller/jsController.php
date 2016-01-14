<?php

class jsController{

	public static function addLike($request, $context){
		// get the response parameter from URL
		$response = $_REQUEST["response"];

		$hint = "";

		// lookup all hints from array if $q is different from ""
		if ($resopnse !== "") {
		
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


?>