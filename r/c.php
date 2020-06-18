<?php
echo "VIenuoliktas uzdavinys";
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(1,3);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
$sum = array_sum($c);
echo $sum;
echo '<br>';
$sk2 = ($sum - $long * $a)/($b-$a);
$sk1 = $long - $sk2;
echo $sk2;
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
echo '<h3>Skaičius '.$a.'  yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';


# provided code, a lot of it can be parametrised
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(2,5);
$count1 = $count2 = 0;
echo "<h3>Values $a and $b</h3>";
$array = [];
for ($i=0; $i<$long; $i++) {
    $array[] = array_rand(array_flip([$a, $b]));
}
echo "<h4>Array:</h4><pre>";
print_r($array);
echo "</pre></br>";
# restricions: no comparison, no regex and string functions; allowed functions: https://www.php.net/manual/en/ref.math.php - like floor and ceil.
# cheaty way would be iterating an array and counting which also doubles as confirming the result below:
foreach ($array as &$number) {
    if ($number === $a) $count1++;
    if ($number === $b) $count2++;
}
unset($number);
echo "<h3>Number $a repeats: $count1, number $b repeats: $count2</h3>";
# expected way is to use only mathematics but for that I need to know sum and length of array
$sum = array_sum($array);
$count = count($array);
$average = $sum / $count ;
$a_difference = abs($a - $average);
$b_difference = abs($b - $average);
$ratio = $a_difference / $b_difference;
// a x n1 + b x n2 = sum
// a x n1 + b x ratio x n1 = sum
// (1 + ratio) x n1 = count
// n1 = count / (1 + ratio)
$count1 = $count / (1 + $ratio);
$count2 = $count1 * $ratio;
echo "<h3>Number $a repeats: $count1, number $b repeats: $count2</h3>";


do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(2,4);
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
$bendraSuma = array_sum($c);
echo '<br>';
echo 'Arejaus bendra suma: '.$bendraSuma;
echo '<br>';
$aPilnas = $a * $long;
echo '<br>';
echo 'Jei sarase butu vien pirmi skaiciai: '.$aPilnas;
echo '<br>';
$aPilnasDivision = $aPilnas / $bendraSuma;
echo '<br>';
echo 'Sio skaiciaus dalyba is esamos bendros sumos: '.$aPilnasDivision;
echo '<br>';
$aPilnasMinus = $a *( $long-1) + $b;
echo '<br>';
echo 'Jei sarasas turetu visus pirmus ir viena antra skaiciu suma: '.$aPilnasMinus;
echo '<br>';
$aPilnasMinusDivision =  $aPilnasMinus / $bendraSuma;
echo '<br>';
echo 'Sio skaiciaus dalyba is esamos bendros sumos: '.$aPilnasMinusDivision;
echo '<br>';
$divisionSkirtumas = $aPilnasDivision  - $aPilnasMinusDivision;
echo '<br>';
echo 'Skirtumas tarp dalybu: '.$divisionSkirtumas;
echo '<br>';
$findingNumber = ($aPilnasDivision - 1) / $divisionSkirtumas;
echo '<br>';
echo 'Pirma dalyba - 1 padalinta is dalybu skirtumo duoda antro skaiciaus pasikartojima: '.$findingNumber;
echo '<br>';
$other = $long - $findingNumber;
echo '<h3>Skaičius '. $a .' yra pakartotas '.$other.' kartų, o skaičius '. $b .' - '.$findingNumber.' kartų.</h3>';