<?php

// 引入文件
require_once('dbControl.php');

/*
  查询数据库
  selectDb（$sql）
  参数： =>  $sql 传递查询语句
  返回值：=>  php数组
  
*/


// // 编写sql语句
// $sql="SELECT * from test";
// // 执行函数(函数传递sql语句)
// $res = selectDb($sql);
// if (count($res)>0) {
//     // 输出结果
//     print_r($res);
//      对返回的数组进行操作，使其符合前端接收要求
//     $newArr = [
//         'status'=>'0',
//         'message'=>$res,
//     ];
//     echo '<br>';
//     print_r($newArr);
//     echo '<br>';
    // 转化为json数组。
//     $returnJson = json_encode($newArr);

//     echo $returnJson;
    
// }else {
//     echo '0 结果';
// }

// echo '<br>';


// $returnJson = json_encode($res);

// echo $returnJson;


/*
增删改
insertDb($sql)
deleteDb($sql)
updateDb($sql)
参数： =>  $sql 传递的SQL语句
返回值：=>  成功返回：10，失败返回错误信息
*/


// // 插入测试
// $sql="INSERT INTO test(name,id) values('222','7')";
// $res = insertDb($sql);
// // 成功返回 10


// // 删除测试
// $sql="DELETE FROM test WHERE id = '5'";
// $res = deleteDb($sql);
// // 成功返回 10

// // 修改测试
// $sql="UPDATE test SET name='333' WHERE id='7'";
// $res = update($sql);
// // 成功返回 10

// echo $res;




