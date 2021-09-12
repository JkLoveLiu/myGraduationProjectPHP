<?php
require '../dbControl.php';

// 页数
$pageNum = $_GET['pageNum'];

$startNum = ($pageNum - 1) * 7;


function getPageData($startNum): array
{
    $sql = "select user_id,user_account,user_name,user_email,user_school,user_createtime,user_status 
            from xiaoyi.mall_user limit $startNum,7";
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while ($myRow = mysqli_fetch_assoc($dbResult)) {
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}

// 返回数据
echo json_encode(getPageData($startNum));