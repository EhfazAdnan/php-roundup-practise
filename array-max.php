<?php
// find max|min values from array

$array1 = array(34,354,343,32,43,43,4,3243323343,3434);
$large = $array1[0];
$small = $array1[0];

for($i=1; $i<count($array1); $i++){
    if($array1[$i] > $large){
        $large = $array1[$i];
    }
}

for($i=1; $i<count($array1); $i++){
    if($array1[$i] < $small){
        $small = $array1[$i];
    }
}

echo "Max value: ".$large."<br />";
echo "Min value: ".$small;
