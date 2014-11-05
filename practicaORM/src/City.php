<?php
/**
* @Entity @Table(name="city")
**/
class City {
    /** @Id @Column(type="integer") @GeneratedValue **/
    public $id;
    
    /** @Column(type="string") **/
    public $name;
    
     /** @Column(type="integer") **/
    public $cp;

   public function setName($name) {
        $this->name = $name;
    }
    
    public function getCp() {
        return $this->cp;
    }
    
    public function getName() {
        return $this->name;
    }
}
?>
