<?php
//這個函式會直接將原陣列排序，而不會回傳新陣列

//陣列二元樹建立，參數為 陣列、 鍵值 、 陣列數量
function build_heap(&$array, $i, $t){
  $tmp_var = $array[$i];    
  $j = $i * 2 + 1;

  while ($j <= $t)  {
   if($j < $t)
    if($array[$j] < $array[$j + 1]) {
     $j = $j + 1; 
    }
   if($tmp_var < $array[$j]) {
    $array[$i] = $array[$j];
    $i = $j;
    $j = 2 * $i + 1;
   } else {
    $j = $t + 1;
   }
  }
  $array[$i] = $tmp_var;
 }

 function heap_sort(&$array) {
  //This will heapify the array
  $init = (int)floor((count($array) - 1) / 2);
  // Thanks jimHuang for bug report
  for($i=$init; $i >= 0; $i--){
   $count = count($array) - 1;
   build_heap($array, $i, $count);
  }

  //swaping of nodes
  for ($i = (count($array) - 1); $i >= 1; $i--)  {
   $tmp_var = $array[0];
   $array [0] = $array [$i];
   $array [$i] = $tmp_var;
   build_heap($array, 0, $i - 1);
  }
 }

// Demo
// $array = array(9,8,7,6,5,4,3,2,1,0,10,1000,0);
// heap_sort($array);
// print_r($array);

//測試演算法，測試時間的部份可以用來跟sort函式比較看看
echo "堆積演算法："."<br>";
$startTime = microtime(1);
$arr = range(1, 1000);
shuffle($arr);

echo "before sort: ", implode(', ', $arr), "\n";
heap_sort($arr);
echo "after sort: ", implode(', ', $arr), "\n";

echo "use time: ", microtime(1) - $startTime, "s\n";
echo "<hr>";

echo "PHP內建函式sort()："."<br>";
$startTime = microtime(1);
$sortArr = range(1, 1000);
shuffle($sortArr);

echo "before sort: ", implode(', ', $sortArr), "\n";
sort($sortArr);
echo "after sort: ", implode(', ', $sortArr), "\n";

echo "use time: ", microtime(1) - $startTime, "s\n";
echo "<hr>";

//堆積演算法仍然不如內建函式，話說演算法優化真有這麼神奇嗎？

?>
