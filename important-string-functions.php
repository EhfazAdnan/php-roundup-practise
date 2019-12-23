<?php
// strlen() , strpos()

$str = "Hello world!";
echo $length = strlen($str);

echo "<br />";
echo $position = strpos($str, ' ');

echo "<br />";
echo $searchfromreverse = strrchr($str,"e");

echo "<br />";
echo $searchfromstart = strpbrk($str,"w");