<?php

/** 
 * @Entity
 * @Table(name="fredouil.utilisateur")
 */
class message{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @emetteur @Column(type="integer") */ 
	//public $emetteur;
		
	/** @destinataire @Column(type="integer") */ 
	//public $destinataire;

	/** @parent @Column(type="integer") */ 
	//public $parent;

	/** @post @Column(type="integer") */ 
	//public $post;

	/** @aime @Column(type="integer") */ 
	//public $aime;

	public function getUtilisateur(){
		return this->id;
	}
	
}

?>
