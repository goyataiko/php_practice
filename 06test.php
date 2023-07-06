<?php

echo "\n 1. ";

function double($numb) {
    $result = $numb*2;
    return $result;
}

echo double(3);




echo "\n 2. ";

 function add($a, $b){
 $result = $a+$b;
 return $result;
 }
 echo add(1,3);
 
 
 
 
echo "\n 3. ";
 
function multi($arr) {
    
    $a=1;
    foreach($arr as $num){
        $a *= $num;
    }
    return $a;
}


$arr= array(1, 3, 5 ,7, 9);
echo multi($arr);
 




echo "\n 4. ";
function max_array($arr){
  $maxV = $arr[0];
  foreach($arr as $a){
      if ($a > $maxV) {
          $maxV = $a;
      }
      
  }
  return $maxV;
}

echo max_array($arr);

 
 
 //  strip_tags
echo "\n 4.1: ";

$str = "<p>test</p><button type='button'>button1</button>";
echo strip_tags($str);  


// array_push
echo "\n 4.2: \n";

$arr_p = array("a","b","c");
array_push($arr_p, "d","e");
print_r($arr_p);


// time, mktime
// date
 
// array_merge
echo "\n 4.3: \n";

$arr_m_1 = array("a","b","c");
$arr_m_2 = array("1","2","3");

$arr_m = array_merge($arr_m_1, $arr_m_2);
print_r($arr_m);



echo "\n 4.4: \n";

date_default_timezone_set("Japan");
echo "The time is " . date("h:i:sa");

echo "\n";
$d=mktime(4, 14, 54, 7, 6, 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "\n 4.5: \n";
echo "Today is " . date("Y/m/d");

 echo "\n";
