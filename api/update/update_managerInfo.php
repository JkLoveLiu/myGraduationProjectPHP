<?php
require '../dbControl.php';

/*
 * [manager_id] => id
 * [manager_account] => 账号
 * [manager_name] => 用户名
 * [manager_email] => 邮箱
 * [manager_power] => 权限
 * [manager_createtime] => 创建时间
 */

$id = $_POST['manager_id'];
$account = $_POST['manager_account'];
$name = $_POST['manager_name'];
$email = $_POST['manager_email'];
$power = $_POST['manager_power'];

$sql = "UPDATE xiaoyi.manager_user SET 
                            manager_account='$account',manager_name='$name',manager_email='$email', 
                            manager_power='$power' WHERE manager_id='$id'";
echo updateDb($sql);
// 成功返回 10