<?php
require '../dbControl.php';
/*
 * [user_id] => 用户ID
 */

$id = $_GET['goods_id'];

$sql = "DELETE FROM xiaoyi.mall_goods WHERE goods_id = '$id'";
$res = deleteDb($sql);
// 成功返回 10

