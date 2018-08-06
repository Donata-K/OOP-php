<?php
$valandos = rand(0,23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$am_pm = ($valandos>11) ? 'PM' : 'AM';

printf('%\'02d : %\'02d : %\'02d %s', $valandos,$minutes,$sekundes,$am_pm);


// if($valandos<=11 && $valandos>=0){
// echo $valandos.':'.$minutes.':'.$sekundes.' AM' ;
// }
// else
// echo $valandos.':'.$minutes.':'.$sekundes.' PM' ;


