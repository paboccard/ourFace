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

	/** @Column(type="integer") 
	 * 	@OneToOne(targetEntity="utilisateur")
	 *	@JoinColumn(name="emetteur", referencedColumnName="id")
	 */ 
	public $emetteur;
		
	/** @Column(type="integer")
	 * 	@OneToOne(targetEntity="utilisateur")
	 *	@JoinColumn(name="destinataire", referencedColumnName="id")
	 */  
	public $destinataire;

	/** @Column(type="integer") */ 
	public $parent;

	/** @Column(type="integer") */ 
	public $post;

	/** @Column(type="integer") */ 
	public $aime;

	public function getId(){
		return $this->id;
	}

	public function getEmetteur(){
		return $this->emetteur;
	}

	public function getDestinataire(){
		return $this->destinataire;
	}

	public function getParent(){
		return $this->parent;
	}

	public function getPost(){
		return $this->post;
	}

	public function getAime(){
		return $this->aime;
	}

	public function setAime(){
		$this->aime = $this->aime + 1;
	}
	
}

?>
