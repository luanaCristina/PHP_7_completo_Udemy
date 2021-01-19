<?php

$a = 30;
$b = 55;
$c = 55.0;

var_dump($a > $b);
echo "\n";

var_dump($a < $b);
echo "\n";

var_dump($a == $b);
echo "\n";

var_dump($b == $c);
echo "\n";

//compara tipo e valor
var_dump($b === $c);
echo "\n";

//! é a negação
var_dump($a != $b);
echo "\n";

//! é a negação
var_dump($a !== $b);
echo "\n";

?>