<?php

namespace citiesyprovinces;

class City {

    public $name;
    public $cp;

    public function __construct($name, $cp) {
        $this->name = $name;
        $this->cp = $cp;
    }

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