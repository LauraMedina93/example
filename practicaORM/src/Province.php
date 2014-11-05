<?php
use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity @Table(name="province")
**/
class Province{
    /**
   * @OneToMany(targetEntity="City", mappedBy="Province")
   **/
   private $cities;

    public function __construct() {
     $this->cities = new ArrayCollection();
   }
   
     /** @Id @Column(type="integer") @GeneratedValue **/
    public $id;
    /** @Column(type="string") **/
    public $name;
    
    public function getId (){
        return $this->id;
    }

        public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    
    public function getCities()
    {
        return $this->cities;
    }
    
}

?>
