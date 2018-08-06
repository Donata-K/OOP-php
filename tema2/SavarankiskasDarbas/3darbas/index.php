<!-- Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 
3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, 
kuri skaičiuos žvakių kainą. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 
3000  -->

<?php
$zvakes = rand(5,3000);
$kaina = 1; // kaina 1 vnt - 1 eur.
$zvakiu_suma = $zvakes * $kaina; //Apskaiciavimas zvakiu kainos be nuolaidos
echo 'Zvakiu kiekis : '.$zvakes.' vnt';
echo'<br>';
echo'<br>';
echo 'Zvakiu kaina be nuolaidu : '.$zvakiu_suma.' Eur';
echo'<br>';
echo'<br>';
echo'*******************************************************************';
$procentai3 = 3;
$apskaiciuojama_nuolaida = ($zvakiu_suma * $procentai3)/100;
$galutine = $zvakiu_suma - $apskaiciuojama_nuolaida;
if($zvakiu_suma>=1000 && $zvakiu_suma<=1999){
    echo'<br>';
    echo'<br>';
    echo 'Nuolaida su 3 proc: '.$apskaiciuojama_nuolaida.' Eur';
    echo'<br>';
    echo'<br>';
    echo 'Galutine suma pritaikius nuolaidos : '.$galutine.' Eur';
    echo'<br>';
    echo'<br>';
    echo'*********************************************************************';
}elseif($zvakiu_suma>=2000 && $zvakiu_suma<=3000){
$procentai4 = 4;
$apskaiciuojama_nuolaida = ($zvakiu_suma * $procentai4)/100;
$galutine = $zvakiu_suma - $apskaiciuojama_nuolaida;
    echo'<br>';
    echo'<br>';
    echo 'Nuolaida su 4 proc: '.$apskaiciuojama_nuolaida.' Eur';
    echo'<br>';
    echo'<br>';
    echo 'Galutine suma pritaikius nuolaida : '.$galutine.' Eur';
    echo'<br>';
    echo'<br>';
    echo'*********************************************************************';
};
