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
//        $ggg = substr_replace("/$XXXX", "$YYY", $text);

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
        for ($i = strlen($string_reverse); $i >= 0; $i--) {
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
        $a = "abc";
        $b = "def";
        $new_password = "";
        $first_array = str_split($a);
        $second_array = str_split($b);
        foreach ($first_array as $index => $new) {
            $new_password .= $new;
            if ($second_array[$index]) {
                $new_password .= $second_array[$index];
                unset($second_array[$index]);
            }
        }
        if (count($second_array) > 0) {
            foreach ($second_array as $value) {
                $new_password .= $value;
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

    public function findIntersection($string_array)
    {
        $strArr = array("1, 2, 3, 4, 5", "6, 7, 8, 9, 10");
        $arrInter = [];
        $arr1 = explode(', ', $strArr[0]);
        $arr2 = explode(', ', $strArr[1]);
        $outcome = "false";
        foreach ($arr1 as $new_str) {
            if (in_array($new_str, $arr2)) {
                $arrInter[] = $new_str;
            }
        }
        $strArrWorked = (count($arrInter) > 0) ? $outcome : implode(",", $arrInter);
        return $strArrWorked;
    }

    public function calcAverage($no1, $no2, $no3, $no4, $no5)
    {
        $average = 0;
        $build = array($no1, $no2, $no3, $no4, $no5);
        rsort($build,);
        $valid = true;
        $arrAverage = [];
        foreach ($build as $b) {
            if ($b > 100) {
                $average = -2;
                $valid = false;
                break;
            } elseif ($b < 0) {
                $average = -1;
                $valid = false;
                break;
            }
        }
        if ($valid) {
            for ($i = 0; $i <= 2; $i++) {
                $arrAverage[] = $build[$i];
            }
            $average = ceil(array_sum($arrAverage) / 3);
        }
        return $average;


    }

    public function getHighest()
    {
        $items = array(1, 44, 5, 6, 68, 9);
        $max = 0;
        foreach ($items as $item) {
            $max = ($max < $item) ? $item : $max;
        }
        echo $max;
    }


//$animal = array('type' => 'dog', 'name' => 'Max');
//$b = (object) $animal;
//$ggg = "";


//$str = "fdff,12,rrf,25,trdf,25,rfrr,tr";
//$words = explode(',',$str);
//$arrWords = [];
//$arrDigits = [];
//foreach($words as $objWordOrDigit)
//{
//    $isDigit =   $isDigit = preg_match('/[0-9]/', $objWordOrDigit);
//    if($isDigit)
//    {
//        array_push($arrDigits,$objWordOrDigit);
//    }
//    else{
//        array_push($arrWords,$objWordOrDigit);
//    }
//
//}
//$words =implode('|', array_filter($arrWords));
//$digits = implode('|',array_filter($arrDigits));
//$line = $words.$digits;
//$ggg = 0;
//public static function isDigit($digitOrString) {
//    $isDigit = preg_match('/[0-9]/', $digitOrString);
//    var_dump($isDigit);
//}


    public function LongestWord($sen)
    {
//        $sen = "this is some sort of sentence";
        $sen = "123456789 98765432";
        $longest_word = "";
        $word_and_length = [];
        $word_count = 0;
        foreach (explode(" ", $sen) as $words) {
            $string = preg_replace('/[^A-Za-z0-9]+/', '', $words);
            $word_and_length[$string] = strlen($string);
        }
        $long = 0;
        foreach ($word_and_length as $word) {
            if ($word > $long) {
                $long = $word;
                $longest_word = array_search($long, $word_and_length);
            } elseif ($word == $long) {
                $longest_word = array_search($long, $word_and_length);
            }
        }
        return $longest_word;

    }

    public function moves($a)
    {

        $smallest = 0;
        $count = 0;
        $count_r = 0;
        $result = [];
//        foreach ($a as $moves){
//            if(($smallest+1) == $moves){
//                $count++;
//                $smallest = $moves;
//                $result[]=$count;
//            }
//        }
        $arr = array_reverse($a);
        foreach ($a as $moves) {
            if (($smallest + 1) == $moves) {
                $count++;
                $smallest = $moves;
                $result[] = $count;
            }
        }

        if ($count > 1000000000) {
            $count = -1;
        }
        return $count;
    }

    function getNumberOfMovies($substr)
    {
        $ggg = $substr;
        /*
         * Endpoint: "https://jsonmock.hackerrank.com/api/movies/search/?Title=substr"
         */
        $total = 0;
        try {
            $url = 'https://jsonmock.hackerrank.com/api/movies/search/?Title=' . $substr;
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            $data = curl_exec($curl);
            curl_close($curl);
            $data = json_decode($data, true);
            $total = $data['total'];
            return $total;

        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    function determineisPower($arr)
    {
        $arrPow = [];
        foreach ($arr as $n) {
            if (($n > 0) && (($n & ($n - 1)) == 0)) {
                $arrPow[] = 1;
            } else {
                $arrPow[] = 0;
            }

        }
        return $arrPow;

    }

    function runningSum($arr)
    {
        $arr = [10, -5, 4, -2, 3, 1, -1, -6, -1, 0, 5];
        $x = count($arr);
        foreach ($arr as $n) {
            $x += $n;
            $sum = $x;
            if ($sum < 0) {
                break;
            }
        }
        return $sum;


    }

    function intergerFlor()
    {
        $a = 1.1;
        $b = 3.89;
        $num = (integer)(round(floor($a + $b), 0));

    }

    function determinaAnagrams()
    {
        // Write your code here
        $a = "fcrxzwscanmligyxyvym";
        $b = "jxwtrhvujlmrpdoqbisbwhmgpmeoke";
        $arrayStringB = str_split($b);
        $arrayStringA = str_split($a);
        $removed_chars = 0;
        foreach ($arrayStringA as $str) {
            $key = array_search($str, $arrayStringB);
            if ($key !== false) {
                unset($arrayStringB[$key]);
            } else {
                $removed_chars += 1;
            }
        }
        $removed_chars += count($arrayStringB);
        return $removed_chars;

    }

    function soldiers()
    {
        $arr = [4, 4, 3, 3, 1, 0];
        $count = 0;
        foreach ($arr as $value) {
            if (in_array($value + 1, $arr)) {
                $count++;
            }
        }
        return $count;
    }

    function alternatingCharacters($s)
    {
        // Write your code here
        $s = "ABABABAB";

        $deletion = 0;
        $reg = "";

        for ($x = 0; $x < strlen($s); $x++) {
            if ($reg == $s[$x]) {
                $deletion++;
            } else {
                $reg = $s[$x];
            }
        }
        return $deletion;
    }


    function isValidString()
    {
//        $str = "aabbcd";//no
        $str = "abcdefghhgfedecba";//yes
        $strBuild = [];

        $count = 0;
        foreach (str_split($str) as $letter) {
            if (array_key_exists($letter, $strBuild)) {
                $strBuild[$letter] += 1;
            } else {
                $strBuild[$letter] = 1;
            }
        }
        if (count(array_unique($strBuild)) === 1) {
            $response = "YES";
        } else {
            $strBuild = array_values($strBuild);
            $current = 0;
            $reduced = False;
            for ($x = 0; $x < count($strBuild); $x++) {
                if ($x == 0) {
                    $current = $strBuild[$x];
                } else {
                    if (($x > 0) && $current == $strBuild[$x]) {
                        $response = "YES";
                    } else {
                        $value = $strBuild[$x] - 1;
                        if ($value == 0) {
                            unset($strBuild[$x]);
                        } else {
                            if (in_array($value, $strBuild)) {
                                $strBuild[$x] = $value;
                            }
                        }
                    }
                }

            }
        }
        $response = (count(array_unique($strBuild)) === 1) ? "YES" : "NO";
        return $response;
    }

    function QuestionsMarks()
    {
//        $str = "9???1???9??1???9"; //false
        $str = "9???1???9??1???9"; // false
//        $str = "acc?7??sss?3rr1??????5";//true
//        $str = "9???1???9??1???9";//false

        $count_q_mark = 0;
        $response = "false";
        $last_digit = 0;
        foreach (str_split($str) as $value) {
            switch ($value) {
                case is_numeric($value):
                    if ($last_digit + $value == 10) {
                        if ($count_q_mark != 3) {
                            return "false";
                        } else {
                            $response = "true";
                        }
                    }
                    $last_digit = $value;
                    $count_q_mark = 0;
                    break;
                case $value == "?":
                    $count_q_mark++;
                    break;
            }

        }
        return $response;
    }

    function FirstFactorial()
    {
        $sum = 8;
        $total = 0;
        $count = 1;
        for ($x = 1; $x <= $sum; $x++) {
            $count = ($count * $x);
            $total = $count;
        }
        return $total;
    }

    function cleanString()
    {
        $foo = 10;
        $bar = (boolean)$foo;
        echo $bar;

        $url = "https://coderbyte.com/api/challenges/json/json-cleaning";
        $cleaned = "";
        try {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            $data = curl_exec($curl);
            curl_close($curl);
            $arrData = json_decode($data, true);
            foreach ($arrData as $index => $data) {
                if (is_array($data)) {
                    foreach ($data as $val) {
                        if (empty($val) or ($val == "N/A") or ($val == "-")) {
                            $key = array_search($val, $data);
                            unset($arrData[$index][$key]);
                        }
                    }
                } else {
                    if (empty($data) or ($data == "N/A") or ($data == "-")) {
                        $key = array_search($data, $arrData);
                        unset($arrData[$key]);
                    }
                }
            }
            return $arrData;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function foo()
    {

        $str = "abcabc";
        $letters = str_split($str);
        for ($x = 0; $x <= count($letters); $x++) {
            if (($letters[$x] == "a" and $letters[$x + 1] == "b") or ($letters[$x] == "b" and $letters[$x + 1] == "a")) {
                $gggg = "";
            }

        }
    }


    function charlie()
    {
        $strArr = ["OOOO", "OOFF", "OCHO", "OFOO"];
        $found = 0;
        foreach ($strArr as $key => $arr) {
            $inner_array = str_split($arr);
            if (!in_array("F", $inner_array) and
                !in_array("C", $inner_array) and
                !in_array("H", $inner_array)) {
                unset($strArr[$key]);
                continue;
            }

            foreach ($inner_array as $var) {
                if ($var == "O") {
                    $found++;
                }
            }
        }
    }

    function StringReduction()
    {
        $str = "abcabc";
        $string = str_split($str);
        $letter = 0;
        $response = 0;
        $loop = True;
        while ($loop) {
            switch ($string[$letter] . $string[$letter + 1]) {
                case 'ab':
                case 'ba':
                    array_splice($string, $letter, 2, 'c');
                    $letter = 0;
                    break;
                case 'ac' :
                case 'ca':
                    array_splice($string, $letter, 2, 'b');
                    $letter = 0;
                    break;
                case 'bc' :
                case 'cb':
                    array_splice($string, $letter, 2, 'a');
                    $letter = 0;
                    break;
                default:
                    $letter++;
            }

            if (count(array_unique($string)) === 1) {
                $response = count($string);
                $loop = False;
            }
        }
        return $response;
    }

    function cutOff()
    {
        $lengths = [1, 1, 3, 4];
        $rods = [];
        $min_key = min($lengths);
        array_push($rods, $min_key);
        $index = 0;
        foreach ($lengths as $length) {
            if ($length > 1) {
                $new_value = $length - $min_key;
                array_push($rods, $new_value);
                $lengths[$index] = $new_value;
            } else {
                unset($lengths[$index]);
                $lengths = array_values($lengths);
            }

        }
        foreach ($lengths as $l) {
            if ($l > count($lengths)) {
                $new_value = $l - count($lengths);
                array_push($rods, $new_value);
                $lengths[$index] = $new_value;
                unset($lengths[$index]);
                $lengths = array_values($lengths);
            }
        }
        return $rods;

    }

    public function countingStrings(){
        $s = "aba";
        $n = 10;
        $letter_count_a = substr_count($s,"a");
        $char_length = strlen($s);
        $total = (int)($n / $char_length);
        $remainder = $n % $char_length;
        $count =  $letter_count_a * $total;
        for($i = 0; $i < $remainder; $i++){
            if($s[$i] == "a") {
                $count++;
            }
        }
        return $count;
    }

    function generateLottoNumbers(){

        $total = 5;
        $processed= "";
        $ball_set = 5;
        $total_pool_numbers = 50; //powerball
        $exclude_bonus = true;
        do {
            $generatedNumber = [];
            $count = 0;
            for($x = 0; $x<=$ball_set; $x++){
                if ($count < $ball_set){
                    $rand_numbers = rand(1 , $total_pool_numbers);
                    while(in_array($rand_numbers,$generatedNumber)){
                        $rand_numbers = rand(1 , $total_pool_numbers);
                    }
                    if(!in_array($rand_numbers,$generatedNumber)){
                        array_push($generatedNumber,$rand_numbers);
                        $count ++;
                    }
                }
                else{
                    sort($generatedNumber);
                    $bonus = rand(1,20);
                    array_push($generatedNumber,$bonus);
                    $count ++;
                }
            }
            $processed  .= implode(" - ",$generatedNumber). "\r\n";
            $total --;
        }
        while($total !== 0);
        echo $processed;
    }
}
