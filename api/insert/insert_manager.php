<?php
require '../dbControl.php';
/*
 * [account] => 账号
 * [password] => 密码
 * [name] => 昵称
 * [email] => 邮箱
 */

// 查询账号是否已存在
$account = $_POST['account'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "select * from xiaoyi.manager_user where manager_account='$account'";
$con = connDb();
$dbResult = $con->query($sql);
if (mysqli_num_rows($dbResult) !== 0) {
// 账号已存在
    die('20');
} else {
//    插入数据
    $date = date("Y-m-d H:i:s");  // 当前时间
    $sql = "INSERT INTO xiaoyi.manager_user(manager_account, manager_name, manager_pwd, manager_email, manager_createtime) 
            values('$account','$name','$password','$email','$date')";
    echo insertDb($sql);
}