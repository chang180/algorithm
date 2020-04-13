<?php

/**
 * 題目一. isset，empty的差別 (或者什麼情境該使用什麼)
 */



/**
 * 題目二. 經常用到的幾個處理array的語法 (說明或者code)
 * array_values();
 * array_push();
 * array_key_exists();
 * array_merge();
 * array_filter();
 * json_decode();
 * json_encode();
 */

/**
 * 題目三
 * 已知echo 出現 Undefined
 * 可以加入什麼code解決
 */

$aa = array(
    array("c" => 1),
    array("c" => 2),
    array("c" => 3)
);

for ($i=0;$i<count($aa);$i++) {
    if ($aa[$i]["c"] == 2) {
        unset($aa[$i]);
    }

    for ($j=0;$j<count($aa);$j++) {
        echo $aa[$j]['c'];
    }
}


/**
 * 題目四
 * 使用foreach的迴圈將$fin 加到 3
 */

$ea = array(
    array("a" => 1),
    array("a" => 2),
);

$fin = 0;
foreach ($ea as $key => $value ) {

}

/**
 * 題目五
 * 迴圈中 return、break、continue 差別
 *
 */

/**
 * 題目六
 *
 * 下方有兩個table ，當程式只獲取到變數 $OrderID = 474565 時 ，如何將 ShopName查出
 * 請用任一種 JOIN 將兩張表結合 (寫出搜尋語句)
 *
 * OrderInfo
 *
 * ShopID || OrderID
 * -------------------------
 * 1679   || 474565
 * -------------------------
 *
 *
 * ShopInfo
 *
 * ShopID || ShopName
 * ---------------------------
 * 1679   || 家樂福
 * ----------------------------
 *
 * SQL語法 =>
 *
 */

/**
 * 題目七
 * 107行得出的答案為何
 */

class Common {
    public $a = 10;
    public $c = 14;

    public function test ($a,$c) {
        $ans = $a+$this->c;
        return $ans;
    }
}

$com = new Common ;

$a = 5;
$c = 7;

$com->c = $a;

echo $com->test($a,$c);


/**
 * 題目八 請用date語法查出10天後星期幾
 */


/**
 * 題目九
 *
 * OrderInfo
 *
 *  OrderID || TotalPrice
 * ---------------------------
 *  1       ||  55
 *  2       ||  66
 *  3       ||  77
 * ----------------------------
 *
 * 請將表格 TotalPrice 做加總
 * SQL語法 =>
 *
 * 請搜尋出資料總筆數
 * SQL語法 =>
 */


/**
 * 題目十
 *
 * $text = "全家,7-11,萊爾富"
 * 請將 $text 的資料以 "json的形式insert" 進 OrderInfo的表格中 如下表 (OrderID 為自動增加)
 *
 *  OrderInfo
 *
 *  OrderID || text
 * ---------------------------
 *  1       ||  ["全家,"7-11","萊爾富"]
 * ----------------------------
 *
 * PHP 轉換 =>
 * SQL 語法 =>
 */


/**
 * 題目十一
 *
 * 為了提升查詢速度，如果要查詢 ProductInfo 的 column name = color中，color等於yellow和red的產品，querry應該怎麼寫。
 *
 * SQL語法 =>
 */
