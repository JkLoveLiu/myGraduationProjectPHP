<?php

require '../dbControl.php';

/*
 * [id] => 用户id
 * [oldPwd] => 旧密码
 * [newPwd] => 新密码
 */
$id = $_GET['id'];
$oldPwd = $_GET['oldPwd'];
$newPwd = $_GET['newPwd'];

// 验证旧密码是否正确
function isOldPwd($id, $oldPwd)
{
    $sql = "select * from xiaoyi.manager_user where manager_id='$id' and manager_pwd='$oldPwd'";
    $con = connDb();
    $dbResult = $con->query($sql);
    return mysqli_num_rows($dbResult);
}

if (isOldPwd($id, $oldPwd) == 1) {
//    旧密码正确可以更改密码
    $sql = "update xiaoyi.manager_user set manager_pwd='$newPwd' where manager_id='$id'";
    echo updateDb($sql);
//    销毁变量，重新登录
    unset($_SESSION['isLog']);
    unset($_SESSION['name']);
//    正确返回10
} else {
//    密码错误返回
    echo 11;
}