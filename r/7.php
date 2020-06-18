<?php
$functionRepeatCount = rand(1, 3);
function generateArr($functionRepeatCount, $reset = false){
    static $callCount = 0;
    if ($reset) {
        $callCount = 0;
        return; 
    }
    $callCount++;
    $array = [];
    $randomNumber = rand(10, 20); // masyvo ilgis
    for($i = 0; $i < $randomNumber; $i++){

        if( ($i+1) == $randomNumber){ // true kai paskutinis
            if($callCount >= $functionRepeatCount){
                array_push($array, 0); // Visiskas galas
            }else{
                $newArr = generateArr($functionRepeatCount); // visi paskutiniai
                array_push($array, $newArr);
            }
        }else{
            array_push($array, rand(0, 1)); //
        }

    }
    return  $array;
}



$generatedArr = generateArr($functionRepeatCount);
echo "Rekursijos gylis: $functionRepeatCount";
echo '<br>';
_dc($generatedArr);
echo '<br>';
echo '<br>';

generateArr(null, true);

$generatedArr = generateArr($functionRepeatCount);
echo "Rekursijos gylis: $functionRepeatCount";
echo '<br>';
_dc($generatedArr);
echo '<br>';
echo '<br>';



function suma($array)
{
    static $suma = 0;
    
    foreach ($array as $val) {
        if (is_array($val)) {
            suma($val);
        }
        else {
            $suma += $val;
        }
    }
    return $suma;
}

_dc(suma($generatedArr));
_dc(suma($generatedArr));
_dc(suma($generatedArr));
