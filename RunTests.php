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

$x1 = 1;
$y1 = 2;
$x2 = 2;
$y2 = 1;


$test->merge($a,$b);
//$test->maxTrailing($levels);
//$test->canReach($x1,$y1,$x2,$y2);
//
//$numbers =[1,2,3,4,5];
//$test->iceBreaker($numbers);
