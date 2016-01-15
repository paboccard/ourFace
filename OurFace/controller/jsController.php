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
}


?>