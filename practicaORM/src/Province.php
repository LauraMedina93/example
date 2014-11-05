<?php
/**
* @Entity @Table(name="province")
**/
class Province
{
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
    
    
}

?>
