<?php

include 'class_lib.php';
$stefan = new person();
$jim = new person();

$stefan->set_name("Stefan Mischook");
$jim->set_name("Jimmy Waddles");

echo "<br><br>Stefan vardas:<br>" . $stefan->get_name().'<br>'.$stefan->age;
echo "<br><br>Jim vardas:<br>" . $jim->get_name().'<br>'.$jim->age;


