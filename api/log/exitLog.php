<?php
header('Access-Control-Allow-Origin: *');
session_start();
// 退出登录
unset($_SESSION['isLog']);
unset($_SESSION['name']);
echo 14;
