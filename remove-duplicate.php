<?php 

$array1 = array(2,3,45,53,3,4,56,7,8,5,6,65,65,7);
$array2 = array();

foreach($array1 as $key=>$val){
   $array2[$val] = $val;    
}

echo '<pre>';
print_r($array2);
echo '</pre>';