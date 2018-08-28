<?php
class Builder extends ConstructionCompany {
      protected $name;
      protected $skills;




      public function __construct() {    
        parent::__construct();   
        $this->name=$this->generateName();
        $this->skills=(array)array_rand(array_flip(['electrician', 'plumber', 'tractor driver', 'engineer']),1);
      }


      public function printInfo(){
        $this->printInfoCompany();
        $this->printInfoConstructionCompany();
        echo '<br>BUILDER INFO<br>';
        echo 'Builder Name : '.$this->name.'<br>  Builder Skills : '.implode(' , ', $this->skills).'<br>';
        // echo 'Builder Name : '.$this->name.'<br>';
  

    }
  
    public function addSkill($skill){
      if($this->employees==0 && $this->turnover == 0) {
        echo 'Company '.$this->name.' is bankrupt ';
      return;
  }
      if(in_array($skill, $this->skills)==false){
        $this->skills[]=$skill;
    }
      //tiesioginis skills irasymas antras variantas prie softwareCompany

    // $skills = array('electrician', 'plumber', 'tractor driver', 'engineer');
    // $rand_keys = array_rand($skills, 1);
    // echo $skills[$rand_keys[0]] . "\n";



}
function bankrupt(){ 
  parent::bankrupt();
  $this->skills=[];
  $this->name='';
}
}