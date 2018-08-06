<?php
$valandos = rand(0,23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$am_pm = ($valandos>11) ? 'PM' : 'AM';
echo $valandos;
echo '<br>';
echo $minutes;
echo '<br>';
echo $sekundes;
echo '<br>';

// printf('%\'02d : %\'02d : %\'02d %s', $valandos,$minutes,$sekundes,$am_pm);
// echo '<br>';
if($sekundes + $seconds1 >= 60) {
    $minutes++;
    $sekundes+= $seconds1 - 60;
} else {
    $sekundes += $seconds1;
}

$seconds1 = rand(1, 60);



echo '<br>';
printf('%\'02d : %\'02d : %\'02d %s', $valandos, $minutes, $sekundes, $am_pm);



// $h = rand(0,23);
// $m = rand(0, 59);
// $s = rand(0, 59);

//     $h = floor($s / 3600);
//     $s -= $h * 3600;
//     $m = floor($s / 60);
//     $s -= $m * 60;
// return $h.':'.sprintf('%02d', $m).':'.sprintf('%02d', $s);