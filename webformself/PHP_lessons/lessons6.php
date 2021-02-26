<?php
//error_reporting(-1)
/*
Арфмитически операторы
"+" сложение  $a + $b
"-" вычитание $a - $b
"*" умножение $a - $b
"/" деление   $a - $b
"-$a" отрицание (смена знака $a)
"$a % $b" деление по модулю остаток от деление 
"$a ** $b" возведение в степень 
"=" присваивание (установка значения)
"&" присваивание по ссылке
===========================================
"++$a" префиксный инкремент
"$a++" постфиксный инкремент

"--$a" префиксный декремент
"$--"  постфиксный декремент

"." конкатенация(склеивание строк)
комбинированые операторы */

/*
$a = $a + 1; //$a++
var_dump($a);*/

/*$str = 'Hello';
$str2 = ' World';
$str3 = $str . $str2;
echo $str3;*/

/*
$fruit = 'apple';
$winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
echo $winnie_pooh;
echo $wi = "Hello I'm Winnie" . $winnie_pooh . "S";
*/

/*$str1 = 'Hello';
$str2 ='World';

echo $str1 .= "Yes";
*/
$houre = 60;
$second = 60;
$sumhoure = $houre * $second;
$sut = 24;
$sumasut =  $sut * $sumhoure;
$nedi = $sumasut * 7;
echo "<h1>Количество секунд в чаcе {$sumhoure}, в сутках {$sumasut}, в недели {$nedi}</h1>";

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var += 1;
echo '<br/>' . ++$var;
echo '<br/>' . --$var;




?>