<?php

/** 
 * @Entity
 * @Table(name="fredouil.chat")
 */
class chat{

	/** @Id @Column(type="integer")
	 *  @GeneratedValue
	 */ 
	public $id;

	/**
	* @ManyToOne(targetEntity="utilisateur", cascade={"all"})
	* @JoinColumn(name="emetteur", referencedColumnName="id")
	**/ 
	public $emetteur;

	/** 
	* @OneToOne(targetEntity="post", cascade={"all"})
	* @JoinColumn(name="post", referencedColumnName="id")
	**/ 
	public $post;

	public function getId(){
		return $this->id;
	}
	public function getEmetteur(){
		return $this->emetteur;
	}

	public function getPost(){
		return $this->post;
	}
	public function setEmetteur($emetteur)
	{
		$this->emetteur = $emetteur;
	}
	
	public function setPost($post)
	{
		$this->post = $post;
	}

}



?>
