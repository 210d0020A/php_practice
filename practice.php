<?php
echo 'hello php!';
$integer = 20;
$string = "abc";
echo $integer;
echo $string;
$new_integer = $integer + 10;
echo $new_integer;
$array = [2017, 2018, 2019, 2020,];
echo $array[0];
echo $array[2];
$array2 =["spring", "summer", "autumu", "winter",];
echo $array2[2];
$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];
echo $animals["cat"];
echo $animals["bird"];
$result = true;
if ($result == true) {echo "成功しました";} else {echo "失敗しました";}
$value = 6;
echo $value + 2;
$value = 6;
echo $value - 2;
$value = 6;
echo $value * 2;
$value = 6;
echo $value / 2;
$value = "AAA";
echo $value . "BBB";

$value = 10;
$result = $value == 20;
var_dump($result);

$value = 10;
$result = $value < 20;
var_dump($result);

$value = 10;
$result = $value > 20;
var_dump($result);

$a = "20";
$b = 20;

$result = $a == $b;    
var_dump($result);

$result = $a === $b;
var_dump($result);

$height = 160;

