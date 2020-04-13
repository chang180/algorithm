<?php

/**
 * 題目一. isset，empty的差別 (或者什麼情境該使用什麼)
 */
// isset 用來辨識一個變數是否被定義 (0,空值也都屬於被定義回傳true，唯獨 變數 = null 時，isset辨識為false);
// empty 用來辨識值的存在與否 0,'',null 對於empty都屬空值回傳true，反之false


/**
 * 題目二. 經常用到的幾個處理array的語法 (說明或者code)
 * array_values(); 強制將陣列的key名轉為 0,1,2.... ， 或者將key雜亂的陣列重新整理 key從0開始 ， array_values(array)
 * array_push(); //將值加進一個陣列尾部， array_push(array,values)
 * array_key_exists(); //用來辨識一個陣列中否有某個key array_key_exists("key",array)
 * array_merge(); //將兩個或多個陣列合併 array(array1,array2,arrayN.....)
 * array_filter(); //可用來過濾陣列 array_filter(array); 過濾 0、空值、null 的key
 * json_decode();
// 將 json格式的字串，轉換成PHP可操作的類型 json_decode(json字串,true) 轉換為陣列，json_decode(json字串)，轉換為物件
 * json_encode(); 將陣列或物件 轉換為json格式字串
 */

/**
 * 題目三
 * 已知35行的echo 出現 Undefined
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
    //$aa = array_values($aa); 或者 sort($aa);
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
    // $fin += $ea[$key]['a']; 或者  $fin += $value['a'];
}

/**
 * 題目五
 * 迴圈中 return、break、continue 差別
 *
 * 當使用return時，終止迴圈並可帶回傳值
 * 使用break，中斷迴圈
 * 使用continue 使迴圈跳過該迴(本次)迴圈
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
 * SQL語法 => SELECT B.ShopName FROM OrderInfo A LEFT JOIN ShopInfo B ON A.ShopID = B.ShopID WHERE A.OrderID = 474565
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

// $ans = 5+5 = 10 ;

/**
 * 題目八 請用date語法查出10天後星期幾
 */

// date('l',strtotime("now +10day")); (任何可以表達日期的參數都可以 'l','w','D','N')

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
 * SQL語法 => SELECT sum(TotalPrice) FROM OrderInfo
 *
 * 請搜尋出資料總筆數
 * SQL語法 => SELECT count(OrderID) FROM OrderInfo
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
 * PHP 轉換 => $text = json_encode($text);
 * SQL 語法 => INSERT INTO OrderInfo (text) VALUES ($text)
 */


/**
 * 題目十一
 *
 * 為了提升查詢速度，如果要查詢 ProductInfo 的 column name = color中，color等於yellow和red的產品，querry應該怎麼寫。
 *
 * SQL語法 => SELECT * FROM ProductInfo WHERE color IN (yellow,red)
 */
