<?php
$str = "Hi, from programming nation!";
echo $str;
echo '<br />';
echo '<hr>';
echo strrev($str);
echo '<br />';
echo '<hr>';

$strarray = explode(' ',$str);
echo "<pre>";
print_r($strarray);
echo "</pre>";
echo '<br />';
echo '<hr>';

echo count($strarray);
echo '<br />';
echo '<hr>';

for($i=count($strarray) - 1; $i>=0; $i--){
    echo $strarray[$i];
    echo "  ";
}
echo '<br />';
echo '<hr>';

for($i=count($strarray) - 1; $i>=0; $i--){
    for($j=strlen($strarray[$i]) - 1; $j>=0; $j--){
        echo $strarray[$i][$j];
    }
    echo "  ";
}