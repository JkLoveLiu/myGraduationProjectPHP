<?php
require '../dbControl.php';
/*
 * [order_id] => 订单id
 * [goods_id] => 商品id
 * [goods_buyers] => 购买者
 * [goods_announcer] => 发布者
 * [flag_buyers] => 购买者状态
 * [flag_announcer] => 发布者状态
 * [order_flag] => 订单状态
 * [createtime] => 创建时间
 * [updatetime] => 修改时间
 */
$date = date("Y-m-d H:i:s");  // 当前时间

$id = $_POST['order_id'];
$goods_id = $_POST['goods_id'];
$goods_buyers = $_POST['goods_buyers'];
$goods_announcer = $_POST['goods_announcer'];
$flag_buyers = $_POST['flag_buyers'];
$flag_announcer = $_POST['flag_announcer'];
$order_flag = $_POST['order_flag'];
$updateTime = date("Y-m-d H:i:s");  // 当前时间


$sql = "update xiaoyi.mall_order set 
        goods_id='$goods_id',goods_buyers='$goods_buyers',goods_announcer='$goods_announcer',
        flag_buyers='$flag_buyers',flag_announcer='$flag_announcer',order_flag='$order_flag',
        updatetime='$updateTime' where order_id='$id'";
echo updateDb($sql);



