<?php

/** 
 * @Entity
 * @Table(name="fredouil.post")
 */
class post{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/** @Column(type="string", length=2000) */ 
	public $texte;
		
	/** @Column(type="datetime") */ 
	public $date;

	/** @Column(type="string", length=200) */ 
	public $image;
	
	public function getId(){
		return $this->id;
	}

	public function getTexte(){
		return $this->texte;
	}

	public function getDate(){
		return $this->date;
	}

	public function getImage(){
		return $this->image;
	}

	public function setTexte($texte){
		$this->texte = $texte;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function setImage($image){
		$this->image = $image;
	}
}

?>
