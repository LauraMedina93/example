<?php
/**
* @Entity @Table(name="city")
**/
class City {
    /**
* @ManyToOne(targetEntity="Province", inversedBy="cities")
* @JoinColumn(name="province", referencedColumnName="id")
**/
   private $province;
    
    /** @Id @Column(type="integer") @GeneratedValue **/
    public $id;
    
    /** @Column(type="string") **/
    public $name;
    
    public function setName($name) {
        $this->name = $name;
   }
    
    public function getName() {
        return $this->name;
    }
    
    public function getProvince() {
        return $this->province;
    }

    public function setProvince($province) {
        $this->province = $province;
    }


}
?>
