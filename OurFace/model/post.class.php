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

	/** @texte @Column(type="string", length=2000) */ 
	public $texte;
		
	/** @date @Column(type="datetime") */ 
	public $date;

	/** @image @Column(type="string", length=200) */ 
	public $image;
	
}

?>
