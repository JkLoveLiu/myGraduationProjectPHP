<?php
require '../dbControl.php';
/*
 * [goods_id] => 商品id
 * [goods_title] => 商品标题
 * [goods_detail] => 商品介绍
 * [goods_school] => 商品学校
 * [goods_oldprice] => 商品原价格
 * [goods_price] => 商品价格
 * [goods_category] => 商品分类
 * [goods_createtime] => 创建时间
 * [goods_updatetime] => 修改时间
 * [goods_status] => 商品状态
 * [goods_announcer] => 发布者id
 */
$id = $_POST['goods_id'];
$title = $_POST['goods_title'];
$detail = $_POST['goods_detail'];
$school = $_POST['goods_school'];
$oldPrice = $_POST['goods_oldprice'];
$price = $_POST['goods_price'];
$category = $_POST['goods_category'];
$createTime = $_POST['goods_createtime'];
$updateTime = $_POST['goods_updatetime'];
$status = $_POST['goods_status'];
$announcer = $_POST['goods_announcer'];
$date = date("Y-m-d H:i:s");  // 当前时间

$sql = "UPDATE xiaoyi.mall_goods SET 
        goods_title='$title',goods_detail='$detail',goods_school='$school',goods_oldprice='$oldPrice',
        goods_price='$price',goods_category='$category',goods_createtime='$createTime',goods_updatetime='$date',
             goods_status='$status',goods_announcer='$announcer'              
        WHERE goods_id='$id'";
echo updateDb($sql);
// 成功返回 10