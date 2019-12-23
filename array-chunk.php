<?php
$color = array("red","green","blue","white","black");
$chunk_array = array_chunk($color, 3);

echo "<pre>";
print_r($chunk_array);
echo "</pre>";