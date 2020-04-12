<?php

//網路上隨便抄都有，重點是有沒有理解，才到快速演算法其實也還好，但還需要點時間才有辦法重現它，先好好照著程式碼來一行一行的看


//建立快速排序的函式
function quickSort($arr)
{
    // 數量小於1的陣列就甭排了
    $len = count($arr);
    if ($len <= 1) {
        return $arr;
    }

    // 將指標定在第1個數
    $v = $arr[0];
    //大小陣列各自宣告
    $low = $up = array();
    // 開始排序，大於指示往大的陣列丟，小於等於指標的都丟進小的陣列去
    for ($i = 1; $i < $len; ++$i) {
        if ($arr[$i] > $v) {
            $up[] = $arr[$i];
        } else {
            $low[] = $arr[$i];
        }
    }
    // 大小陣列再各自使用相同方式遞廻排序
    $low = quickSort($low);
    $up = quickSort($up);

    // 處理完成之後大小陣列合體，完成排序，合併時要把指標也加回去
    return array_merge($low, array($v), $up);
}

//測試演算法，測試時間的部份可以用來跟sort函式比較看看
echo "快速演算法："."<br>";
$startTime = microtime(1);
$arr = range(1, 1000);
shuffle($arr);

echo "before sort: ", implode(', ', $arr), "\n";
$sortArr = quickSort($arr);
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

// 結論是PHP的sort()函式效能遠遠大於快速排序法，很顯然是不同的演算法
?>