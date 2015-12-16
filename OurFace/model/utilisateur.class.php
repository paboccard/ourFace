<?php

/** 
 * @Entity
 * @Table(name="fredouil.utilisateur")
 */
class utilisateur{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string", length=45) */ 
	public $identifiant;
		
	/** @Column(type="string", length=45) */ 
	public $pass;

	/** @Column(type="string", length=45) */ 
	public $nom;

	/** @Column(type="string", length=45) */ 
	public $prenom;

	/** @Column(type="string", length=100) */ 
	public $statut;

	/** @Column(type="string", length=200) */ 
	public $avatar;

	/** @Column(type="datetime", length=4000) */ 
	public $date_de_naissance;


	public function getId(){
		return $this->id;
	}

	/**
     * @return ArrayCollection $message
     */
	/*public function getMessages(){
		return $this->id;
	}*/

	public function getIdentifiant(){
		return $this->identifiant;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function getStatut(){
		return $this->statut;
	}

	public function getAvatar(){
		return $this->avatar;
	}

	public function getDateDeNaissance(){
		return $this->date_de_naissance;
	}
}

?>
