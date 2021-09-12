<?php
require '../dbControl.php';
/*
 * [order_id] => 用户ID
 */

$id = $_GET['order_id'];

$sql = "DELETE FROM xiaoyi.mall_order WHERE order_id = '$id'";
$res = deleteDb($sql);
// 成功返回 10
