<?php

class jsController{

	public static function rafraichirChat($request,$context){
		$msg = chatTable::getChats();
		$reversed = array_reverse($msg);
					foreach ($msg as $key => $value) {
					$new = htmlspecialchars($value->post->texte);
				echo $value->emetteur->nom.' '.$value->emetteur->prenom.' dit: <br>	'.$new.'<br>';
		}  
		return context::NONE;
	}
	public static function addMessage($request,$context){


		if(!empty($_POST['message']))
		{
			chatTable::setChats($_POST['message']);
		} 
		 
		return context::NONE;
	}

	public static function addLike($request, $context){
		if (!empty($request['id'])){
			echo messageTable::setAime($request['id']);
		}
		return context::NONE;

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

	public static function refreshwall($request,$context){
		return context::SUCCESS;
	}

	public static function refreshMyWall($request,$context){
		$context->profile=$_POST['id'];
		return context::SUCCESS;
	}

	public static function myWall($request,$context){
		if (!empty($_POST['message']) && !empty($_POST['emetteur']) && !empty($_POST['destinataire'])){
			messageTable::publierMessage($_POST['message'], $_POST['emetteur'], $_POST['destinataire']);
			$context->profile=$_POST['destinataire'];
			return context::SUCCESS;
		}
		else
			echo "probleme de post";
	}

	public static function changePhoto($request,$context){
		if (!empty($_POST['image']) && !empty($_POST['id'])){
			utilisateurTable::changePhoto($_POST['id'],$_POST['image']);
		}
	}

	public static function changeStatut($request,$context){
		if (!empty($_POST['statut']) && !empty($_POST['id'])){
			utilisateurTable::changeStatut($_POST['id'],$_POST['statut']);
		}
		return context::NONE;
	}
}


?>