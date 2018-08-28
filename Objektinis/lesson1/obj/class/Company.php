<?php
// 4. Klasė Company turi turėti savybes: name, employees, turnover
// 5. Company objekto kūrimo metu savybės turi būti:
//     name - atsitiktinis stringas iš a-z raidžių, atsitiktinio ilgio nuo 5 iki 12, pirma raidė didžioji
//     employees - atsitiktinis dydis nuo 3 iki 100
//     turnover - atsitiktinis dydis nuo 10000 iki 10000000

class Company {
    private $name;
    protected $employees;
    protected $turnover;

    protected function get_name(){
        return $this->name;

    }

    public function __construct() {   
     $this->name=$this->generateName();   
      $this->employees=rand(3,100);
      $this->turnover=rand(10000,10000000);

    }

    protected function printInfoCompany(){
        echo '<br><br>Company name : '.$this->name.'<br>';
        echo 'Company employees : '.$this->employees.'<br>';
        echo 'Company turnover : '.$this->turnover.'<br>';

    }

    public function generateName() {

        $nameLength = rand(5, 12);
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomName = '';
    
        for ($i = 0; $i < $nameLength; $i++) {
            $randomName .= $characters[rand(0, $charactersLength - 1)];
        }  
        return ucfirst($randomName);
    }

    protected function bankrupt(){ 
       echo $this->name.' is bankrupt '.$this->employees.' employees are now unemployed. ';
        $this->employees=0;
        $this->turnover=0;
    }

   }


