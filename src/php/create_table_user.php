<?php
   require('./_connect_user.php');

   $sql="CREATE TABLE user(
       username VARCHAR(16) NOT NULL PRIMARY KEY,
       password VARCHAR(16) NOT NULL
   )";
   
   $result=mysqli_query($conn,$sql);
   if($result){
       echo"数据库表创建成功";
   }else{
       echo"数据库表创建失败";
   }
?>