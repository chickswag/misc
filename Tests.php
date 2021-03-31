<?php


class Tests
{
    public function runTests($input){
        echo $input;
    }

    public function maxTrailing($levels){

        $less_readings = 0;

        foreach ($levels as $key => $arr){
            if($key <= 0){
                print('There are no previous readings for level['.$key.']'. '<br/>');
            }
            else{
                for ($index = 0; $index <= count($levels); $index++){
                    if($levels[$index] < $levels[$key]){
                        $less_readings += 1;
                    }
                }
                if($less_readings > 0){
                    print('There are '.$less_readings.' lower earlier readings with a value lower than level['.$key.']'. '<br/>');
                }else{
                    print('There is no earlier reading with a value lower than level['.$key.']'. '<br/>');
                }

                for ($index = 0; $index <= count($levels); $index++){
                    if($levels[$index] < $levels[$key]){
                        print( '* the range is : '.$levels[$index].' - '.$levels[$key].' = '. $levels[$index]-$levels[$key]. '<br/>');
                    }
                }
            }
        }
    }

    public function merge($a, $b){



        $text = "how now bow cow";
        $ggg = substr_replace("/$XXXX","$YYY",$text);

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

//                if($array[$i] > $array[$i+1]) {
//                    $temp = $array[$i+1];
//                    $array[$i+1]=$array[$i];
//                    $array[$i]=$temp;
//                }
                if($array[$j] < $array[$i]) {
                    $a = $array[$j];
                    $b = $array[$i];
                    $array[$i] = $a;
                    $array[$j] = $b;
                }
            }
        }
        return $array;
    }

    public function canReach($x1,$y1,$x2,$y2){
        $start = ($x1+$y1);
        if($start >= $x2){
            $end = $x2+$y1;
            if($end == $y2){
                print("Yes");
            }
            else{
                print("No");
            }
        }
        else{
            print("No");
        }
    }

    public function iceBreaker($numberArray){
        $number = end($numberArray);
        $array = [];
        $new_array = [];


            if($number % 2 == 0) {
                //even
                foreach ($numberArray as $num) {
                    $array[] = $num;
                }

            }
            else{
                foreach ($numberArray as $num) {
                    if($num % 2 != 0){
                        $array[] = $num;
                    }

                }
                $key =  $numberArray[$number-1];
                if($key <= $number){
                    $new_array = array_reverse($array);
                }
            }
            return $new_array;

    }

}
