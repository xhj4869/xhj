<?php
require('./connect.php');

// 创建数据库
$sql = "CREATE DATABASE shop";

$result = mysqli_query($conn,$sql);

if($result){
    echo '数据库创建成功';
}else{
    echo '数据库创建失败';
}


// $mysql="CREATE DATABASE nubia";

// $myresult= mysqli_query($conn,$mysql);

// if($result&&$myresult){
//     echo '数据库创建成功';
// }else{
//     echo '数据库创建失败';
// }
// ?>