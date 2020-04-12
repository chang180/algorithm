<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble</title>
</head>

<body>
    <?php

    // 這個寫法是依照氣泡排序的正常邏輯處理，易於理解

    function sortArray($arr)
    {
        // 外圈決定整個排序的組數
        for ($i = 0; $i < count($arr) - 1; $i++) {
            // 內圈再一個一個對相鄰的數字做大小比較之後排序
            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                $tmp = 0;
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }

// 測試

echo "氣泡演算法："."<br>";
$startTime = microtime(1);
$arr = range(1, 1000);
shuffle($arr);

echo "before sort: ", implode(', ', $arr), "\n";
$sortArr = sortArray($arr);
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

    // $arr = [5, 8, 6, 3, 9, 2, 2, 6, 1, 7];
    // $result = sortArray($arr);
    // foreach($arr as $val) echo $val."<br>";
    // print_r($result);


    ?>
</body>

</html>