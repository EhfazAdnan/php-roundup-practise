<?php
$a = [1,2,3,4];
$b = [5,6,7,8];

echo "<pre>";
print_r(array_merge($a,$b));
echo "</pre>";

$c = [1,2,3,4];
$d = ['one','two','three','four'];

echo "<pre>";
print_r(array_combine($c,$d));
echo "</pre>";