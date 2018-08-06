<?php
$drambliai=3;
if($drambliai) {
    echo'Yra drambliu';
    $drambliai = $drambliai - 1;
    echo'<br>';
    echo $drambliai;
}
else echo 'Nera drambliu';


$drambliai=3;
$raganosiai = 5;
if($raganosiai > $drambliai ) {
    echo'<br>';
    echo'raganosiu daugiau';
    $drambliai = $drambliai + 1;
    echo'<br>';
    echo $drambliai;
}
else echo 'drambliu daugiau';
echo'<br>';
echo '**************************';
echo'<br>';
echo'<br>';
echo '------------------------';
echo'<br>';

$petras_taskai=rand(10,20);
$jonas_taskai=rand(5,25);
echo'<br>';
echo $petras_taskai;
echo'<br>';
echo $jonas_taskai;
echo'<br>';

if($petras_taskai > $jonas_taskai){
    echo'<br>';
    echo'Laimejo Petras';
    echo'<br>';
}
elseif($petras_taskai == $jonas_taskai){
echo 'Tasku kiekis lygus';
echo'<br>';
}
else echo 'Laimejo Jonas';



