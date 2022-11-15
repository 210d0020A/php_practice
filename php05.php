<?php
$height = 160;
if ($height < 150) { echo "150cm 未満の方はご乗車できません。"; }
else { echo "ご乗車になれます"; }


$height = 160; 
if ($height < 150) { echo "150cm未満の方はご乗車できません"; }
else { echo "ご乗車なれます"; }

$weekday = "月曜";
switch ($weekday) {
    case "月曜日":
        echo "加熱ごみの日";
        break;
    case"水曜日":
        echo "資源ごみの日";
        break;
    default:
         echo "回収はありません";
         break;
}
$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b);

for($i = 0; $i < 10; $i++){
  echo $i;
}

$total = 0;
echo $total;

for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple", "orange", "lemon");

echo count($fruits);

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}

$animals = array("dog", "cat", "panda");

foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}

function sum(){ $result = 0;
for($i = 1; $i <= 10; $i++){
$result += $i;
    }
    return $result;
}
echo sum();
echo "\n";
