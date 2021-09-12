<?php
require '../dbControl.php';

/*
 * [user_id] => 3 [user_account] => user.0
 * [user_name] => 0 [user_email] => 111111@qq.com
 * [user_school] => qqqqqqq
 */
$id = $_POST['user_id'];
$account = $_POST['user_account'];
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$school = $_POST['user_school'];

$sql = "UPDATE xiaoyi.mall_user SET 
                            user_account='$account',user_name='$name',user_email='$email', 
                            user_school='$school' WHERE user_id='$id'";
echo updateDb($sql);
// 成功返回 10


