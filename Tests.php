<?php


class Tests
{
    public function runTests($input)
    {
        echo $input;
    }

    public function maxTrailing($levels)
    {

        $less_readings = 0;

        foreach ($levels as $key => $arr) {
            if ($key <= 0) {
                print('There are no previous readings for level[' . $key . ']' . '<br/>');
            } else {
                for ($index = 0; $index <= count($levels); $index++) {
                    if ($levels[$index] < $levels[$key]) {
                        $less_readings += 1;
                    }
                }
                if ($less_readings > 0) {
                    print('There are ' . $less_readings . ' lower earlier readings with a value lower than level[' . $key . ']' . '<br/>');
                } else {
                    print('There is no earlier reading with a value lower than level[' . $key . ']' . '<br/>');
                }

                for ($index = 0; $index <= count($levels); $index++) {
                    if ($levels[$index] < $levels[$key]) {
                        print('* the range is : ' . $levels[$index] . ' - ' . $levels[$key] . ' = ' . $levels[$index] - $levels[$key] . '<br/>');
                    }
                }
            }
        }
    }

    public function merge($a, $b)
    {


        $text = "how now bow cow";
        $ggg = substr_replace("/$XXXX", "$YYY", $text);

        $merge_array = [$a, $b];
        $array = [];

        foreach ($merge_array as $new_array) {
            foreach ($new_array as $value) {
                $array[] = $value;
            }
        }
        for ($j = 0; $j < count($array); $j++) {
            for ($i = 0; $i < count($array) - 1; $i++) {

//                if($array[$i] > $array[$i+1]) {
//                    $temp = $array[$i+1];
//                    $array[$i+1]=$array[$i];
//                    $array[$i]=$temp;
//                }
                if ($array[$j] < $array[$i]) {
                    $a = $array[$j];
                    $b = $array[$i];
                    $array[$i] = $a;
                    $array[$j] = $b;
                }
            }
        }
        return $array;
    }

    public function canReach($x1, $y1, $x2, $y2)
    {
        $start = ($x1 + $y1);
        if ($start >= $x2) {
            $end = $x2 + $y1;
            if ($end == $y2) {
                print("Yes");
            } else {
                print("No");
            }
        } else {
            print("No");
        }
    }

    public function iceBreaker($numberArray)
    {
        $number = end($numberArray);
        $array = [];
        $new_array = [];


        if ($number % 2 == 0) {
            //even
            foreach ($numberArray as $num) {
                $array[] = $num;
            }

        } else {
            foreach ($numberArray as $num) {
                if ($num % 2 != 0) {
                    $array[] = $num;
                }

            }
            $key = $numberArray[$number - 1];
            if ($key <= $number) {
                $new_array = array_reverse($array);
            }
        }
        return $new_array;

    }

    function countingValleys($steps, $path)
    {
        // Write your code here
        $sea_level = 0;
        $valley = 0;

        for ($i = 0; $i < $steps; $i++) {
            $pathway = $path[$i];
            if ($pathway == "U") {
                if ($sea_level == -1) {
                    $valley += 1;
                }
                $sea_level++;
            } else {
                $sea_level--;
            }
        }
        return $valley;
    }

//
    function countingValleys1($steps, $path)
    {
        $valleys = 0;
        $startedValley = false;
        $fromSea = 0;

        for ($i = 0; $i < $steps; $i++) {
            if ($path[$i] == 'U') {
                $fromSea++;

                if ($fromSea == 0 && $startedValley) {
                    $valleys++;
                    $startedValley = false;
                }
            }

            if ($path[$i] == 'D') {
                if ($fromSea == 0) {
                    $startedValley = true;
                }
                $fromSea--;
            }
        }

        echo $valleys;
    }

    public function fibonacci_sequence($max)
    {
        $number1 = 0;
        $number2 = 1;
        for ($i = 0; $i < $max; $i++) {
            if ($i <= 1) {
                $new = $i;
            } else {
                $new = $number1 + $number2;
                $number1 = $number2;
                $number2 = $new;
            }

            echo $new . "   ";
        }
    }

    public function calculate_factor($number)
    {

        $max = 300;
        $sum = 0;
        for ($i = 1; $i <= $max; $i++) {
            $sum += $number;
            printf("%d -> %d\n", $i, $sum);
            printf("--------------\n");
        }
    }

    public function reverseStringWithSpaces($string_reverse)
    {
        $reversed = "";
        $strChars = strlen($string_reverse);
        for ($i = strlen($string_reverse); $i>=0; $i--) {
            $reversed .= $string_reverse[$i];
        }
        return $reversed;
    }

    public function sortNumbers($num1, $num2)
    {
        $odd_number = [];

        for ($x = $num1; $x <= $num2; $x++) {
            if ($x % 2 != 0) {
                array_push($odd_number, $x);
            }
        }
        return $odd_number;

    }

    public function numberFound($array, $n1)
    {
        $isFound = "No";
        foreach ($array as $index_look) {
            if ($index_look == $n1) {
                $isFound = "YES";
            }
        }
        return $isFound;
    }

    public function generatePassword($a, $b)
    {
        $new_password = "";
        $first_array = str_split($a);
        $second_array = str_split($b);
        foreach ($first_array as $index => $new) {
            $new_password .= $new;
            if ($second_array[$index]) {
                $new_password .= $second_array[$index];
            }
        }
        return $new_password;

    }

    public function determineVowels($vowels_search)
    {
        $vowels = ["a", "e", "i", "o", "u"];
        $found = 0;
        $search = str_split($vowels_search);
        foreach ($search as $index => $v) {
            if (in_array($v, $vowels)) {
                $found++;
            } else {
                $found--;
            }
        }
        return $found;
    }

    public function findIntersection($string_array){

        $arrInter = [];
        $arr1 = explode(', ', $string_array[0]);
        $arr2 = explode(', ', $string_array[1]);
        $count = 0;
        foreach($arr1 as $index =>$new_str){
            foreach ($arr2 as $arr){
                if($new_str == $arr){
                    $arrInter[] = $arr;
                    $count = 1;
                    break;
                }
            }
        }
        if($count == 0){
            $strArrWorked = false;
        }
        else{
            $strArrWorked = implode(",",$arrInter);
        }
        return $strArrWorked;
    }

    public function calcAverage($no1,$no2,$no3,$no4,$no5){
        $average = 0;
        $build =array($no1,$no2,$no3,$no4,$no5);
        sort($build);
        $valid = true;
        $arrAverage = [];
        foreach($build as $b){
            if($b > 100) {
                $average = -2;
                $valid = false;
                break;
            }
            elseif($b < 0){
                $average = -1;
                $valid = false;
                break;
            }
        }
        if($valid){
            for ($i = 4; $i >= 2 ;$i--) {
                $arrAverage[] = $build[$i];
            }
            $average = array_sum($arrAverage) / 3;
        }
        return $average;


    }


}
