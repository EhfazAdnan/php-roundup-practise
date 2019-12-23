<?php
// empty array,array_push(),array_pop()

// empty array
$arr = array();

// array_push()
$array = array(10,20,30,40);
array_push($arr, 50);
print_r($array);
echo "<br />";
echo "<hr>";

// array_pop()
$array1 = array(1,2,3,4,5);
array_pop($array1);
print_r($array1); 


// array sorting function
// sort() - sort accending without key value
// asort() - sort accending with key value - a for associative
// arsort() - sort reverse with key value - a for associative
// rsort() - reverse order sort(decending)
// ksort() - sort according to key
// krsort() - sort reverse according to key
