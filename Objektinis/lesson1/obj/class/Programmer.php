<?php
class Programmer extends SoftwareCompany{
    protected $skills;        // =[]; $name; galima i viena eil.
    private $name;



    public function __construct() {   
        parent::__construct();
        $this->name=$this->generateName();
        $this->skills=array_rand(array_flip($this->programingLanguages),2);
      }
  

      public function printInfo(){
          $this->printInfoCompany();
          $this->printInfoSoftwareCompany();
          echo '<br> PROGRAMER INFO <br>';
          echo 'Programer Skills : '.implode(', ', $this->skills).'<br>';
          echo 'Programer Name : '.$this->name.'<br><br>';
    

      }

      public function addSkill($skill){
        if($this->employees==0 && $this->turnover == 0) {
              echo 'Company  '.$this->get_name().'   is bankrupt<br>';
            return;
        }
        if(in_array($skill, $this->programingLanguages) == false){
            $this->programingLanguages [] = $skill;
        }
        if(in_array($skill, $this->skills)==false){
            $this->skills[]=$skill;
        }
        
    

        }
         function bankrupt(){ 
            parent::bankrupt();
            $this->skills=[];
            $this->name='';
        }
    }


   