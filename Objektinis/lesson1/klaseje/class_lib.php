<?php

class person{
    var $name;
    var $age;
    
    function __construct() {      
        echo '<br>pasileido konstruktorius<br>'; 
        $this->age=rand(18,55);
    }

    function set_name($new_name){
        $this->name= $new_name;
    }
    function get_name(){
        return $this->name;
    }
}


