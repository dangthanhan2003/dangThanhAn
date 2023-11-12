<!DOCTYPE html>
<html>

<body>
<?php
/*Bài 6:
function sapXep($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($mang[$j] < $mang[$i]) {
                $temp = $mang[$i];
                $mang[$i] = $mang[$j];
                $mang[$j] = $temp;
            }
        }
    }
   
    return $mang;
}
$mang = [5, 2, 9, 1, 7];
$mangSapXep = sapXep($mang);
echo "Mảng sau khi sắp xếp: ";
foreach ($mangSapXep as $giaTri) {
    echo "$giaTri ";
}
*/
?>

<?php
/*Bài 7:
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        $x = 1;
        for ($i = 2; $i <= $n; $i++) {
            $x *= $i;
        }
        return $x;
    }
}
// Ví dụ: tính giai thừa của số 5
$n = 5;
$giaiThua = tinhGiaiThua($n);
echo "Giai thừa của $n là: $giaiThua";
*/?>
<?php
/*Bài 8:
function findPrimes($start, $end) {
    $primes = [];
    for ($number = $start; $number <= $end; $number++) {
        $isPrime = true;


        if ($number < 2) {
            $isPrime = false;
        }


        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                $isPrime = false;
                break;
            }
        }


        if ($isPrime) {
            $primes[] = $number;
        }
    }


    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    foreach ($primes as $prime) {
        echo $prime . ", ";
    }
}
$start = 1;
$end = 100;
findPrimes($start, $end);
*/?>
<?php
/*Bài 9:
function sum($array){
    foreach ($array as $number){
        $sum =0;
        $sum += $number; //Lặp mảng và tính tổng
    }
    echo"Tổng của mảng là $sum";
}
$array =[1,2,3,4,5];
$sum = tinhTong($array);
*/?>

<?php
/*Bài 10:
function printFibonacciInRange($start, $end)
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
    if ($start <= 0 && $end >= 0) {
        echo "0";
        if ($end >= 1) {
            echo ", 1";
            return;
        }
    }

    $current = 1;
    $next = 1;

    while ($next <= $end) {
        if ($next >= $start) {
            echo ", $next";
        }

        $temp = $next;
        $next = $current + $next;
        $current = $temp;
    }
}
printFibonacciInRange(10, 100);
*/?>
<?php
/*Bài 11:
function armstrong($number) {
    if(is_int($number)){
    $originalNumber = $number;
    $sum = 0;


    // Đếm số chữ số trong số
    $numDigits = strlen((string)$number);


    // Tính tổng lũy thừa các chữ số
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }


    // Kiểm tra xem số có phải số Armstrong hay không
    if ($originalNumber == $sum) {
        echo"$originalNumber là số Armstrong";
    } else {
        echo"$originalNumber không phải là số Armstrong";
    }} else{
    echo"$number không phải số nguyên";
    }
}
armstrong(152);
*/?>
<?php
/*Bài 12:
function insertElement($array, $element, $position) {
    // Kiểm tra vị trí hợp lệ
    if ($position < 0 || $position > count($array)) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }


    // Tạo mảng mới để chứa các phần tử sau khi chèn
    $newArray = [];


    // Chèn phần tử vào vị trí bất kỳ
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $newArray[] = $element;
        }
        $newArray[] = $array[$i];
    }
    print_r($newArray);
}
$array = [1, 3, 4, 5, 6];
$element = 2;
$position = 1;
$newArray = insertElement($array, $element, $position);
*/?>
<?php
/*Bài 13:
function unique($array){
    $uniqueArray= array_unique($array);
    print_r($uniqueArray);
}
    $array = [1,1,2,2,3,4,5,6];
    $unique = unique($array);
*/?>

<?php
/*
Bài 14:
function findElementPositions($array, $element) {
    $positions = [];


    foreach ($array as $index => $value) {
        if ($value === $element) {
            $positions[] = $index;
        }
    }
    if (empty($positions)) {
        echo "Không tìm thấy phần tử trong mảng.";
    } else {
        echo "Vị trí của phần tử trong mảng là: ";
        foreach ($positions as $position) {
            echo $position . ", ";
        }
    }
}
$array = [1, 1, 5, 7, 1, 9, 11, 1];
$element = 1;
findElementPositions($array, $element);
*/?>

<?php
/*Bài 15:
function reverseString($string){
    $reversedString = strrev($string);
    echo"$reversedString";
}
$string = "!olleH";
reverseString($string);
*/?>

<?php
/*Bài 16:
function countArray($array){
    $count = count($array);
    echo"$count";
}
$array= [1,2,3,4,5,6,7];
countArray($array);
*/?>

<?php
/*Bài 17:
function isPalindrome($string) {
    $string = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string));
    $reversedString = strrev($string);
    if ($string === $reversedString) {
        echo"Chuỗi là chuỗi Palindrome";
    } else {
        echo"Chuỗi không phải là chuỗi Panlindrome";
    }
}
$string = "MADAM";
isPalindrome($string);
*/?>

<?php
/*Bài 18:
function countElements($array, $element) {
    $count =0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
        echo "$count";
}
$array = [1, 1, 5, 7, 1, 9, 11, 1];
$element = 1;
countElements($array, $element);
*/?>

<?php
/*Bài 19:
$array = [5, 2, 9, 1, 3];
rsort($array);
print_r($array);
*/?>

<?php
/*Bài 20:
$array = [1, 2, 3, 4];
$newElement1 = 0;
$newElement2 =5;
array_unshift($array, $newElement1);
array_push($array, $newElement2);
print_r($array);
*/?>

<?php
/*Bài 21:
$array = [5, 2, 9, 1, 3];
$max;
$secondMax;
function secondMax($array){
    global $max;
    global $secondMax;
foreach ($array as $value) {
    if ($value > $max) {
        $secondMax = $max;
        $max = $value;
    } elseif ($value > $secondMax && $value < $max) {
        $secondMax = $value;
    }
}
}
secondMax($array);
echo "Số lớn thứ hai trong mảng là: " . $secondMax;
*/?>

<?php
/*Bài 22:
function findUSCLNAndBSCNN($a, $b)
{
    if ($a == 0 || $b == 0) {
        $ucln = max($a, $b);
        $bcnn = 0;
    } else {
        $max = max($a, $b);
        $min = min($a, $b);
        // Tìm UCLN
        while ($min != 0) {
            $temp = $min;
            $min = $max % $min;
            $max = $temp;
        }
        //Tìm BCNN
        $ucln = $max;
        $bcnn = ($a * $b) / $ucln;
    }
    echo "Ước chung lớn nhất của 2 số $a và $b là: $ucln <br>";
    echo "Bội chung nhỏ nhất của 2 số $a và $b là: $bcnn";
}
$a = 1;
$b = 18;
$result = findUSCLNAndBSCNN($a, $b);
*/?>

<?php
/*Bài 23:
function isPerfectNumber($number)
{
    //Kiểm tra số nguyên
    if(is_int($number)){
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number){
        echo"$number là số hoàn hảo";
    } else {
        echo "$number không là số hoàn hảo";
    }
}   else {
    echo "$number không phải là số hoàn hảo";
}
}
$number = 28;
isPerfectNumber($number);
*/?>

<?php
/*Bài 24:
function maxOddNumber($array)
{  
    $max =0;
    foreach ($array as $number){
        if(!is_int($number)){
            continue;
        }
        if($number % 2 !=0 && $number > $max){
            $max = $number;
        }
    }
    if($max == 0){
        echo "Không có số lẻ nào trong mảng";
    }   else{
        echo "$max là số lẻ lớn nhất trong mảng";
    }
}
$array =[1,2,3,5,5.5];
maxOddNumber($array);
*/?>

<?php
/*Bài 25:
function prime($number){
    $isPrime=true;
    if($number < 2){
        $isPrime = false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            $isPrime=false;
            break;
        }
    }
    if($isPrime){
        echo "$number là số nguyên tố";
    }   else{
        echo "$number không phải là số nguyên tố";
    }
}
prime(3);
*/?>

<?php
/*Bài 26:
function maxInt($array){
    $max = $array[0];
    foreach ($array as $value) {
        if(!is_int($value)){
            continue;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
    echo"$max là số dương lớn nhất trong mảng";
}
$array = [-1,1,2,3,4,5.5];
maxInt($array);
*/?>

<?php
/*Bài 27:
function maxOfNegatives($array) {
    $max=null;
    foreach($array as $number){
        if(($number<0) && ($max===null || $number>$max)){
            $max=$number;
        }
    }
    if($max===null){
        echo"Mảng không có giá trị âm nào";
    }   else{
        echo"$max là giá trị âm lớn nhất của mảng";
    }
}
$array = [-1,2,-3,-4];
maxOfNegatives($array);
*/?>

<?php
/*Bài 28:
function sumOfOdd($n) {
    $tong = 0;
    //nếu số n không phải là số nguyên
    if(!is_int($n)){
        echo"Nhập số khác";
        return;
    }
    //tính tổng
    for ($i = 1; $i <= $n; $i++) {
        if($i %2 ==0){
            continue;
        }   else{
        $tong += $i;
    }
}
    echo "Tổng các số từ 1 đến $n là: $tong";
}
sumOfOdd(10);
*/?>
	
<?php
/*Bài 29:
function findPerfectSquaresInRange($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);
        if (($sqrt * $sqrt) == $i) {
            $perfectSquares[] = $i;
        }
    }
    if (count($perfectSquares) > 0) {
        echo "Các số chính phương trong khoảng từ $start đến $end là: " . implode(", ", $perfectSquares);
    } else {
        echo "Không có số chính phương trong khoảng từ $start đến $end.";
    }
}
$perfectSquares = findPerfectSquaresInRange(1, 20);
*/?>

<?php
/*Bài 30:
function isSubstring($str, $substring)
{
    $strLength = strlen($str);
    $subLength = strlen($substring);
    if ($subLength > $strLength) {
        echo"$substring không phải là chuỗi con của $str";
        return;
    }
    for ($i = 0; $i <= $strLength - $subLength; $i++) {
        $j = 0;
        while ($j < $subLength && $str[$i + $j] == $substring[$j]) {
            $j++;
        }
        if ($j == $subLength) {
            echo "$substring là chuỗi con của $str";
            return;
        }
    }
    echo "$substring không phải là chuỗi con của $str";
}


$str = "Hello, World!";
$substring = "World";
isSubstring($str, $substring);
*/?>
</body>
</html>