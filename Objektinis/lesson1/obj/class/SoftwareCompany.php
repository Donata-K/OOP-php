<?php
// 6. Klasė SoftwareCompany turi turėti savybes programingLanguages
// 7. SoftwareCompany objekto kūrimo metu savybės turi būti:
//     programingLanguages - 3 atsitiktiniai dydžiai iš aibės {PHP, Pascal, Go, C++, JAVA, Phyton}

class SoftwareCompany extends Company {
    protected $programingLanguages;
    private $lang=['PHP', 'Pascal', 'Go', 'C++', 'JAVA', 'Phyton'];

    public function __construct() {   
        parent::__construct();   
        $this->programingLanguages=array_rand(array_flip($this->lang),3);

      }

      //implode pasirenki kada masyva konvertuoja i stringa ir ideda skirtuma pasiirnkta
      protected function printInfoSoftwareCompany(){
        
        echo 'Programing Languages: '.implode(', ', $this->programingLanguages).'<br>';
        }

        
    protected function bankrupt(){ 
        parent::bankrupt();
        $this->programingLanguages=[];
    }

}