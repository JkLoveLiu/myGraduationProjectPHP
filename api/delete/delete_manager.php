<?php
require '../dbControl.php';
/*
 * [user_id] => 用户ID
 */

$id = $_GET['manager_id'];

$sql = "DELETE FROM xiaoyi.manager_user WHERE manager_id = '$id'";
$res = deleteDb($sql);
// 成功返回 10


