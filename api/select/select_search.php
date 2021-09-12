<?php
require '../dbControl.php';
$name = $_GET['name'];
$content = $_GET['content'];
$type = '';
/*
 * [name] => 表名
 * [type] => 字段
 * [content] => 内容
 */
function searchUser($content): array
{
    switch ($_GET['type']) {
        case 1:
            $type = 'user_account';
            break;
        case 2:
            $type = 'user_name';
            break;
        case 3:
            $type = 'user_email';
            break;
        default:
            $type = 'user_school';
            break;
    }
    $sql = "select user_id,user_account,user_name,user_email,user_school,user_createtime,user_status 
            from xiaoyi.mall_user where $type like '%$content%'";
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while ($myRow = mysqli_fetch_assoc($dbResult)) {
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}

function searchManager($content): array
{
    switch ($_GET['type']) {
        case 1:
            $type = 'manager_account';
            break;
        case 2:
            $type = 'manager_email';
            break;
        default:
            $type = 'manager_name';
            break;
    }
    $sql = "select manager_id,manager_account,manager_name,manager_email,manager_power,manager_createtime 
            from xiaoyi.manager_user where $type like '%$content%'";
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while ($myRow = mysqli_fetch_assoc($dbResult)) {
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}

function searchGoods($content): array
{
    switch ($_GET['type']) {
        case 1:
            $type = 'goods_school';
            break;
        case 2:
            $type = 'goods_id';
            break;
        case 3:
            $type = 'goods_title';
            break;
        default:
            $type = 'goods_category';
            break;
    }
    $sql = "select * from xiaoyi.mall_goods where $type like '%$content%'";
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while ($myRow = mysqli_fetch_assoc($dbResult)) {
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}

function searchOrder($content): array
{
    switch ($_GET['type']) {
        case 1:
            $type = 'order_id';
            break;
        case 2:
            $type = 'goods_id';
            break;
        case 3:
            $type = 'goods_buyers';
            break;
        default:
            $type = 'goods_announcer';
            break;
    }
    $sql = "select * from xiaoyi.mall_order where $type='$content'";
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while ($myRow = mysqli_fetch_assoc($dbResult)) {
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}


switch ($_GET['name']) {
    case 'user':
        echo json_encode(searchUser($content));
        break;
    case 'manager':
        echo json_encode(searchManager($content));
        break;
    case 'goods':
        echo json_encode(searchGoods($content));
        break;
    case 'order':
        echo json_encode(searchOrder($content));
        break;
}





