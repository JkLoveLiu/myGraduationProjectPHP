<?php
require './dbControl.php';
$date = date("Y-m-d H:i:s");  // 当前时间
for ($i = 1000; $i < 1200; $i++) {
    $sql = "insert into xiaoyi.mall_order 
            (goods_id, goods_buyers, goods_announcer, createtime, updatetime) 
            VALUES 
            ($i,$i+1,$i+2,'$date','$date')";
    echo insertDb($sql);
    echo $i;
    echo '<br>';
}