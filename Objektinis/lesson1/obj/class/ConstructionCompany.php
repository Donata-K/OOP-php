<?php
// 6. Klasė ConstructionCompany turi turėti savybes buildingObjects
// 7. ConstructionCompany objekto kūrimo metu savybės turi būti:
//     buildingObjects - 4 atsitiktiniai dydžiai iš aibės {Houses, Bridges, Offices, Roads, Gardens, Railroads, Canals, Aqueduct, Stadions}

class ConstructionCompany extends Company {
    protected $buildingObjects;
    private $objects=['Houses', 'Bridges', 'Offices', 'Roads', 'Gardens', 'Railroads', 'Canals', 'Aqueduct', 'Stadions'];

    public function __construct() {   
        parent::__construct();    
        $this->buildingObjects=array_rand(array_flip($this->objects), 4);
    
      }

      protected function printInfoConstructionCompany(){
        echo 'Building Objects: '.implode(', ', $this->buildingObjects).'<br>';
    

    }

    function bankrupt(){ 
        parent::bankrupt();
        $this->buildingObjects=[];
    }

}


