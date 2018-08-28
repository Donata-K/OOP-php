<?php
include 'class_lib.php';
$car1 = new Car();
$car2= new Car();


$car1->set_model("Mini Cooper");
$car2->set_model("Mini Cooper");

$car1->set_color("raudona");
$car2->set_color("juoda");


echo 'Masinos modelis :  '.$car1->get_model().',  spalva   '.$car1->get_color();
echo '<br>Masinos modelis :  '.$car2->get_model().',  spalva  '.$car2->get_color();
