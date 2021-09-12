<?php
require '../dbControl.php';
/*
 * [user_id] => 要修改的id
 * [status] => 值
 */

$id = $_GET['user_id'];
$status = $_GET['status'];

 // 修改测试
 $sql="UPDATE xiaoyi.mall_user SET user_status='$status' WHERE user_id='$id'";
 echo updateDb($sql);
 // 成功返回 10
