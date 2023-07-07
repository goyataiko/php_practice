<?php

$name= "takano";

if ( $name == "takano") {
    echo "私は あなたの名前 です
";} else {"あなたの名前ではありません
";}

$a = 0;
for ($i=1;$i<=10000;$i++){
    $a += $i;
}
echo "$a
";


$fruits = array("1apple", "2orange", "3lemon", "4emon", "5emon");
foreach( $fruits as $fruit) {
    echo "$fruit \n";
}



$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo "$i ";
  }
} echo "\n";
