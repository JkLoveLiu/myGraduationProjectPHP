<?php
require '../dbControl.php';

$dbName = $_GET['name'];

function getTotalPage($dbName)
{
    $sql = "select * from xiaoyi.$dbName";
    $con = connDb();
    $dbResult = $con->query($sql);
    return mysqli_num_rows($dbResult);
}
// 返回总页数
echo getTotalPage("$dbName");