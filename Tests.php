<?php


class Tests
{
    public function runTests($input){
        echo $input;
    }

    public function maxTrailing($levels){
        $size =  count($levels);
        // get the earlier lower reading




        echo $inputArray;
    }

    public function merge($a, $b){

        $merge_array = [$a,$b];
        $array = [];

        foreach ($merge_array as $new_array) {
            foreach ($new_array as $value)
            {
                $array[] = $value;
            }
        }
        for($j = 0; $j < count($array); $j ++) {
            for($i = 0; $i < count($array)-1; $i ++){

                if($array[$i] > $array[$i+1]) {
                    $temp = $array[$i+1];
                    $array[$i+1]=$array[$i];
                    $array[$i]=$temp;
                }
            }
        }
        return $array;
    }

}
