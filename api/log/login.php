<?php

require '../dbControl.php';

session_start();

/*
 * Array ( [username] => aaaaaa
 * [pwd] => aaaaaa
 * [captcha] => aaaa)
 */
// 账号密码
$account = $_POST['username'];
$pwd = $_POST['pwd'];
// 验证账号是否存在
function isAccount($account)
{
    $sql = "select * from xiaoyi.manager_user where manager_account='$account'";
    $con = connDb();
    $dbResult = $con->query($sql);
    return mysqli_num_rows($dbResult);
}

//密码验证
function isPwd($account, $pwd)
{
    $sql = "select * from xiaoyi.manager_user where manager_account='$account' and manager_pwd='$pwd'";
    $con = connDb();
    $dbResult = $con->query($sql);
    return mysqli_num_rows($dbResult);
}

/*
 * Array (
 * [manager_id] => 1 [manager_account] => admin [manager_name] => 超级管理员
 * [manager_pwd] => admin [manager_email] => asdfghj@qq.com [manager_power] => 0
 * [manager_createtime] => 2021-09-08 00:00:00 )
 */
function getManagerInfo($account, $pwd)
{
    $sql = "select * from xiaoyi.manager_user where manager_account='$account' and manager_pwd='$pwd'";
    $con = connDb();
    $dbResult = $con->query($sql);
    return mysqli_fetch_assoc($dbResult);
}

// 验证码验证
if ($_POST['captcha'] == $_SESSION['yzmStr']) {
    // 对账号进行验证
    if (isAccount($account) == 1) {
        // 账号存在，对密码进行验证
        if (isPwd($account, $pwd) == 1) {
            // 向前端返回数据
            $allData = getManagerInfo($account, $pwd);
            $backData = array();
            $backData['loginStatus'] = '0';
            $backData['manager_account'] = $allData['manager_account'];
            $backData['manager_power'] = $allData['manager_power'];
            $backData['manager_email'] = $allData['manager_email'];
            $backData['manager_name'] = $allData['manager_name'];
            $backData['manager_id'] = $allData['manager_id'];
            echo json_encode($backData);
            //  保存登录状态
            $_SESSION['isLog'] = true;
//            传递用户名
            $_SESSION['name'] = $backData['manager_name'];
//            传递权限
            $_SESSION['power'] = $backData['manager_power'];
//            传递ID
            $_SESSION['id'] = $backData['manager_id'];
        } else {
            // 密码错误
            die('11');
        }
    } else {
        // 账号不存在
        die('11');
    }
} else {
    // 验证码错误
    die('10');
}