<?php
//解决跨域
header('Access-Control-Allow-Origin: *');
// 链接数据库函数
function connDb(){
    $con=mysqli_connect("localhost","xiaoyi","xiaoyi","xiaoyi"); 
    if (mysqli_connect_errno($con)) 
    { 
        echo "连接 MySQL 失败: " . mysqli_connect_error(); 
    }
    return $con;
}
// 查询数据库且将数据库查询结果转化为数组
function selectDb($sql){
    $con = connDb();
    $dbResult = $con->query($sql);
    $res = array();
    while($myRow=mysqli_fetch_assoc($dbResult)){
        $res[] = $myRow;
    }
    $con->close();
    return $res;
}
// 添加数据
function insertDb($sql){
    $con = connDb();
    if ($con->query($sql) === TRUE) {
        $returnData = 10;
    } else {
        $returnData = "Error: " . $con->errno. "<br>" . $sql . "<br>" . $con->error;
    }
    $con->close();
    return $returnData;
}
// 删除数据
function deleteDb($sql){
    $con = connDb();
    if ($con->query($sql) === TRUE) {
        $returnData = 10;
    } else {
        $returnData = "Error: " . $con->errno. "<br>" . $sql . "<br>" . $con->error;
    }
    $con->close();
    return $returnData;
}
// 修改数据
function updateDb($sql){
    $con = connDb();
    if ($con->query($sql) === TRUE) {
        $returnData = 10;
    } else {
        $returnData = "Error: " . $con->errno. "<br>" . $sql . "<br>" . $con->error;
    }
    $con->close();
    return $returnData;
}





