<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo 663/10;

//Bài 1 kiểm tra xem một số có phải là số chẵn hay không.
    function checkNum($var){
    if($var % 2 !== 0) {
        echo "1. Output: Số này không phải là số chẵn";
    } else {
        echo "1. Output: Số này là số chẵn";
    }
}
echo checkNum(44);
echo "<br>";
echo "<br>";

//Bài 2 tính tổng của các số từ 1 đến n.
function sumN($n) {
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        $sum += $i;
    }
    echo "2. Output Tổng từ 1 đến $n là: $sum";
}
echo sumN(7);
echo "<br>";

//Bài 3 in ra bảng cửu chương từ 1 đến 10
function BCC() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . $i * $j . "<br/>";
        }
        echo "<br>";
    }
}
echo "<br>";
echo "3. Output:";
echo "<br>";
BCC();

//Bài 4 kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
function findWord($word1, $word2){
    return strpos($word1, $word2);
}
echo "4. Output: ";
echo findWord("Thuy Duong", "Duong");
echo "<br>";
echo "<br>";

//Bài 5 tìm giá trị lớn nhất và nhỏ nhất trong một mảng
function MaxMinValue(array $arr){
    echo "<br>";
    echo "Max la: ".max($arr); 
    echo "<br>";
    echo "Min la: ".min($arr);
}
echo "5. Output: ";
echo MaxMinValue(array(11,35,5));
echo "<br>";
echo "<br>";

// Bài 6 sắp xếp một mảng theo thứ tự tăng dần
function arrange(array $arr){
    sort($arr);
    foreach ($arr as $row) {
        echo $row;
        echo ", ";
    }
}
echo "6. Output: ";
echo arrange(array(11, 3, 10, 55, 0));
echo "<br>";
echo "<br>";

// Bài 7 tính giai thừa của một số nguyên dương
function factorial($num){
    if( is_int($num)!= "1") return "$num khong la mot so nguyen";
        else if ($num < 0) return "$num khong la mot so nguyen duong";
        else 
        $x = $num;
            for($i=1; $i < $num; $i++) {
                $x = $x * ($num - $i);
            } 
    echo "Giai thua cua $num la: $x";
}
echo "7. Output ";
echo factorial(7);
echo "<br>";
echo "<br>";

// Bài 8 tìm số nguyên tố trong một khoảng cho trước
function checkPrime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
function showPrime($a, $b){
    echo "Cac so nguyen to trong day la: ";
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i))
            echo $i, ", ";
    } 
}
echo "8. Output: ";
echo showPrime(5, 20);
echo "<br>";
echo "<br>";

// Bài 9 tính tổng của các số trong một mảng
function totalArr(array $arr){
    echo array_sum($arr);
}
echo "9. Output: ";
echo totalArr(array(1, 2, 3, 4, 5, 6, 7, 8, 9));
echo "<br>";
echo "<br>";

// Bài 10 in ra các số Fibonacci (tổng 2 số trc) trong một khoảng cho trước
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    // if ($n < 0) {
    //     return - 1;
    // } else
     if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
function showFibonacci($word){
    for($j = 0; $j <=$word; $j ++) {
        echo (fibonacci ( $j ) . " ");
    }
}
echo "10. Output: ";
echo showFibonacci(10);
echo "<br>";
echo "<br>";

// Bài 11 kiểm tra xem một số có phải là số Armstrong hay không
function Armstrong($n){
    $num = strlen($n);
    $sum = 0;
    $tmp = $n;
    while($n > 0){
        $tg = $n % 10;
        $sum = $sum + ($tg ** $num); 
        $n /= 10; 
    } 
    if ($sum == $tmp) echo "True";
    else echo "False";
}
echo "11. Output: ";
echo Armstrong(663);
echo Armstrong(371);
echo "<br>";
echo "<br>";

// Bài 12 chèn một phần tử vào một mảng ở vị trí bất kỳ
function arraySplice(array $arr1, array $arr2, $position, $molecules){
    array_splice($arr1, $position, $molecules, $arr2);
    print_r ($arr1);
}
echo "12. Output: ";
echo arraySplice(array("1", "2", "3", "7"),array("5"), "1", "0");
echo "<br>";
echo "<br>";

// Bài 13 loại bỏ các phần tử trùng lặp trong một mảng
function arrayUnique(array $arr){
    print_r (array_unique($arr));
}
echo "13. Output: ";
echo arrayUnique(array (1,2,1,2,3,4,5));
echo "<br>";
echo "<br>";

// Bài 14 tìm vị trí của một phần tử trong một mảng
function findInArr(array $arr, $word){
    $x = count($arr);
    for($i = 0; $i <$x; $i++){
        if($word == $arr[$i]) return "Vi tri la: ". ($i+1);
    }
}
echo "14. Output ";
echo findInArr(array(1,2,3,4,6,5), 5);
echo "<br>";
echo "<br>";

// Bài 15 đảo ngược một chuỗi
function reverse($word){
    return strrev($word);
}
echo "15. Output: ";
echo reverse("Thuy Duong");
echo "<br>";
echo "<br>";

// Bài 16 tính số lượng phần tử trong một mảng
function countArr(array $arr){
    return count($arr);
}
echo "16. Output: ";
echo countArr(array(1,2,4,7,9,8));
echo "<br>";
echo "<br>";

// Bài 17 kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
function palindrome($word){
    if($word == strrev($word)) return "True";
    else return "False";
}
echo "17. Output: ";
echo palindrome("oppo");
echo palindrome("apple");
echo "<br>";
echo "<br>";

// Bài 18 đếm số lần xuất hiện của một phần tử trong một mảng
function countVar(array $arr){
    print_r (array_count_values($arr));
}
echo "18. Output: ";
echo countVar(array("1", "2", "2", "2", "4", "4"));
echo "<br>";
echo "<br>";

// Bài 19 sắp xếp một mảng theo thứ tự giảm dần
function arrDecrease(array $arr){
    rsort($arr);
    foreach ( $arr as $row) {
        echo $row;
        echo ", ";
    }
}
echo "19. Output: ";
echo arrDecrease(array("1", "3", "5", "4"));
echo "<br>";
echo "<br>";

// Bài 20 thêm một phần tử vào đầu hoặc cuối của một mảng
function arrFill(array $arr1, array $arr2, $position, $molecules){
    array_splice($arr1, $position, $molecules, $arr2);
    print_r ($arr1);
}
echo "20. Output: ";
echo arrFill(array("1", "2", "3"), array("4"), "2", "0");
echo "<br>";
echo "<br>";

// Bài 21 tìm số lớn thứ hai trong một mảng
function findArrNum2(array $arr){
    rsort($arr); // rsort hàm sắp xếp mảng theo gtri giảm dần
    return $arr[1];
    }
echo "21. Output: ";
echo findArrNum2(array("1", "2", "8", "4"));
echo "<br>";
echo "<br>";

// Bài 22 tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
function UCLN($a, $b) {
    if ($b == 0) return $a;
    else return UCLN($b, $a % $b);
}
function BCNN($a, $b) {
    return ($a * $b) / UCLN($a, $b);
}
function show($a, $b){
    echo "UCLN la: ".UCLN($a, $b);
    echo "<br>";
    echo "BCNN la: ".BCNN($a, $b);
}
echo "22. Output: ";
echo "<br>";
echo show(100, 15);
echo "<br>";
echo "<br>";

// Bài 23 kiểm tra xem một số có phải là số hoàn hảo hay không
function perfectNum($n){
    $x = 0;
    for($i=1; $i < $n; $i++) {
        if($n % $i == 0)
        $x = $x + $i;
    }
        if($x == $n) return "$n la so hoan hao";
        else return "$n khong la so hoan hao";
    
}
echo "23. Output: ";
echo perfectNum(6);
echo "<br>";
echo "<br>";

// Bài 24 tìm số lẻ lớn nhất trong một mảng
function maxOddNum(array $arr){
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($arr[$i] % 2 != 0)
        return $arr[$i];
    }
}
echo "24. Output: ";
echo maxOddNum(array("1", "2", "33", "7", "44"));
echo "<br>";
echo "<br>";

// Bài 25 kiểm tra xem một số có phải là số nguyên tố hay không
function showCheckPrime($a){
        if(checkPrime($a))
            echo $a, " la so nguyen to ";
            else echo $a, " Khong la so nguyen to"; 
}
echo "25. Output: ";
echo showCheckPrime(25);
echo "<br>";
echo "<br>";

// Bài 26 tìm số dương lớn nhất trong một mảng
function maxPosNum(array $arr){
    rsort($arr);
    for($i =0; $i<4; $i++) {
        if($i == 0)
        return $arr[0];
    }
}
echo "26. Output: ";
echo maxPosNum(array("1", "2", "4", "7"));
echo "<br>";
echo "<br>";

// Bài 27 tìm số âm lớn nhất trong một mảng
function maxNegNum(array $arr){
    echo max($arr);
}
echo "27. Output: ";
echo maxNegNum(array("-1", "-2", "-3", "-7"));
echo "<br>";
echo "<br>";

// Bài 28 tính tổng các số lẻ từ 1 đến n
function totalOddNum($n){
    $total = 0;
    for($i=1; $i <= $n; $i++){
        if($i % 2 != 0)
        $total = $total + $i;
    } return "Tong cac so le tu 1 den $n la: ".$total;
}
echo "28. Output ";
echo totalOddNum(21);
echo "<br>";
echo "<br>";

// Bài 29 tìm số chính phương trong một khoảng cho trước
function perfSqureNums($word){
    $i = 0;
  while($i*$i <= $word){
        if($i*$i == $word){
            return true;
        }
        $i++;
    }
    return false;
}
function showPSN($a, $b){
    echo "Cac so chinh phuong la: ";
    for ($i = $a; $i <= $b; $i++){
        if(perfSqureNums($i))
            echo $i, ", ";
    } 
}
echo "29. Output: ";
echo showPSN(1, 15);
echo "<br>";
echo "<br>";

// Bài 30 kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
function findWord3($word1, $word2){
    $result = strpos($word1, $word2);
    if($result == "") return "False";
    else return "True";
}
echo "30. Output: ";
echo findWord3("Dinh Thuy Duong", "Thuy");
echo "<br>";
?>
</body>
</html>