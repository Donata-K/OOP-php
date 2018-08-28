<?php

class car{
    var $model;
    var $color;

    function set_model($new_model){
        $this->model = $new_model;
    }

    function set_color($new_color){
        $this->color = $new_color;
    }

    function get_color(){
        return $this->color;
    }
    function get_model(){
        return $this->model;
    }
}