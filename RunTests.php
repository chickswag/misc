<?php

require 'Tests.php';

$levels = [7,9,5,6,3,2];
//
//for ($i =0; $i< $levels_count; $i ++){
//    $levels_items = $level;
//    $levels[] = $levels_items;
//
//}


$test = new Tests();

$a = [1,5,7,7];
$b = [0,1,2,3];

$test->merge($a,$b);
