<!-- Įvedami skaičiai -a, b, c –kraštinių ilgiai (​rand()​ funkcija nuo 1 iki 10). Parašykite 
PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų.  -->
<?php
$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo '<br>';
    echo "Yes, this is a triangle!";
    echo '<br>';
} else {
    echo '<br>';
    echo "No, this is not a triangle!";
}

$pusperimetris = ($a+$b+$c)/2;
echo '<br>';
echo 'pusperimetris  : '.$pusperimetris;
echo '<br>';
$plotas1 = sqrt($pusperimetris*($pusperimetris-$a)*($pusperimetris-$b)*($pusperimetris - $c));
echo 'plotas : '.$plotas1;
// echo '<br>';

// $plotas2 = sqrt($pusperimetris*$plotas1);
// echo 'plotas2 '.$plotas2;

