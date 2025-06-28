<?php
$x=54346;
$y=34567e123456;
var_dump(is_float($x));
echo "</br>";
var_dump(is_infinite($y));
echo "</br>";
var_dump(is_finite($y));
?>