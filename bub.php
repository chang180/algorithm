<?php

function bubble_sort(&$array){

    $num = count($array);

    //只是做迴圈
    for($i = 0 ; $i < $num ; $i++){

        //從最後一個數字往上比較，如果比較小就交換
        for($j = $num-1 ; $j > $i ; $j--){

            if($array[$j] < $array[$j-1]){

                //交換兩個數值的小技巧，用list+each
                list($array[$j] , $array[$j-1]) = array($array[$j-1] , $array[$j]);

            }

        }

    }

    return $array;

}

// 測試

echo "氣泡演算法："."<br>";
$startTime = microtime(1);
$arr = range(1, 1000);
shuffle($arr);

echo "before sort: ", implode(', ', $arr), "\n";
$sortArr = bubble_sort($arr);
echo "after sort: ", implode(', ', $sortArr), "\n";

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
//基本演算法，會有落差不意外



//之前的測試寫法，先收起來
// $rand_count=100;

// for($k=0; $k<$rand_count ; $k++){

//     $rand_array[] = rand(0,10000);

// }

// bubble_sort($rand_array);

// print_r($rand_array);
?>