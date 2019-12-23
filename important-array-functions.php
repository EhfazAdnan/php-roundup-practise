<?php
$color = ['G'=>"Black",'Y'=>'Green','C'=>'Yellow','B'=>'White','W'=>'Cyan'];
echo "<pre>";
print_r($color);

array_pop($color);
echo "<pre>";
print_r($color);

array_shift($color);
echo "<pre>";
print_r($color);

// array_unshift //add in first
// unset // remove individual array item