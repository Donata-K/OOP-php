/*
Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.  
*/

<?php
echo '<h2> Antra užduotis </h2>';
$first_number = rand(0, 2);
$second_number = rand(0, 2);
$third_number = rand(0, 2);
$fourth_number = rand(0, 2);

$numbers = $first_number. $second_number. $third_number. $fourth_number;

function occurencesOf012($numbers) {
    $count0 = 0;
    $count1 = 0;
    $count2 = 0;
    for($i = 0; $i < 4; $i++) {
        if($numbers[$i] == 0)
        $count0++;
        else if ($numbers[$i] == 1)
        $count1++;
        else
        $count2++;
    }
    return '0 count is ' .$count0. '<br>' . '1 count is ' 
    .$count1. '<br>' . '2 count is ' .$count2. '<br>';
}

echo $numbers. '<br>';
echo occurencesOf012($numbers);

// Kitas sprendimo budas
// $count0 = substr_count($numbers, 0);
// $count1 = substr_count($numbers, 1);
// $count2 = substr_count($numbers, 2);

// echo $numbers. '<br>';
// echo $count0. '<br>';
// echo $count1. '<br>';
// echo $count2. '<br>';




// $pirmas = rand(0,2);
// $antras = rand(0,2);
// $trecias = rand(0,2);
// $ketvirtas = rand(0,2);
// echo '<br>';
// echo '<br>';
// echo $pirmas;
// echo '<br>';
// echo $antras;
// echo '<br>';
// echo $trecias;
// echo '<br>';
// echo $ketvirtas;
// echo '<br>';
// $skaiciuoja_nulius = 0;
// $skaiciuoja_vienetus = 0;
// $skaiciuoja_dvejetus = 0;
// echo '<br>';
// echo '<br>';
// if($pirmas == $skaiciuoja_vienetus || $antras == $skaiciuoja_vienetus){
//     echo ($skaiciuoja_vienetus + 1);
// };
