<?php
$arr = array(1,2,3,4,5,6,7);
if($index = array_search(2, $arr)){
   unset($arr[$index]);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<hr>";

$array = array(10,20,30,40,50,60,70);
if($index = array_search(20, $array)){
   array_splice($array, $index, 1);
}

echo "<pre>";
print_r($array);
echo "</pre>";