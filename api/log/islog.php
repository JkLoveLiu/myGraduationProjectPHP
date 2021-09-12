<?php
header('Access-Control-Allow-Origin: *');
session_start();
// 判断是否已经登录
if (isset($_SESSION['isLog'])){
    // 已经登录
    echo 11;
}else{
    // 未登录
    echo 12;
}