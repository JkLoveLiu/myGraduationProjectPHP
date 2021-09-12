<?php
require '../dbControl.php';
/*
 * [user_id] => 用户ID
 */

$id = $_GET['user_id'];

$sql = "DELETE FROM xiaoyi.mall_user WHERE user_id = '$id'";
$res = deleteDb($sql);
// 成功返回 10

