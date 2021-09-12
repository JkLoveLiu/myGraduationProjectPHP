<?php

require '../dbControl.php';

// 页数
$pageNum = $_GET['pageNum'];

$startNum = ($pageNum - 1) * 7;


function getPageData($startNum): array
{
    $sql = "select manager_id,manager_account,manager_name,manager_email,manager_power,manager_createtime 
            from xiaoyi.manager_user limit $startNum,7";
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