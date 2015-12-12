<?php

/** 
 * @Entity
 * @Table(name="fredouil.message")
 */
class message{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @emetteur @Column(type="integer") 
	 * 	@ManyToOne(targetEntity="utilisateur")
	 *	@JoinColumn(name="emetteur", referencedColumnName="id")
	 */ 
	public $emetteur;
		
	/** @destinataire @Column(type="integer")
	 * 	@ManyToOne(targetEntity="utilisateur")
	 *	@JoinColumn(name="destinataire", referencedColumnName="id")
	 */  
	public $destinataire;

	/** @parent @Column(type="integer") */ 
	public $parent;

	/** @post @Column(type="integer") */ 
	public $post;

	/** @aime @Column(type="integer") */ 
	public $aime;

	/*public function getUtilisateur(){
		return this->id;
	}*/

	/**
     * @return ArrayCollection $user
     */
	public function getEmetteur(){
		return $this->emetteur;
	}
	
}

?>
