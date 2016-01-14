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

    /** 
     * @ManyToOne(targetEntity="utilisateur", cascade={"all"})
     * @JoinColumn(name="emetteur", referencedColumnName="id")
     */ 
    public $emetteur;
        
    /** 
     * @ManyToOne(targetEntity="utilisateur", cascade={"all"})
     * @JoinColumn(name="destinataire", referencedColumnName="id")
     */  
    public $destinataire;

    /** 
     * @ManyToOne(targetEntity="utilisateur", cascade={"all"})
     * @JoinColumn(name="parent", referencedColumnName="id")
     */ 
    public $parent;

    /** 
     * @OneToOne(targetEntity="post", cascade={"all"})
     * @JoinColumn(name="post", referencedColumnName="id")
     */ 
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
        $this->aime = 0;
    }
    public function setAimePlusOne(){
        $this->aime++;
    }

    public function setEmetteur($emetteur){
        $this->emetteur = $emetteur;
    }

    public function setDestinataire($destinataire){
        $this->destinataire = $destinataire;
    }

    public function setParent($parent){
        $this->parent = $parent;
    }

    public function setPost($post){
        $this->post = $post;
    }
    
}

?>
