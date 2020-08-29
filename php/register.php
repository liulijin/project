<?php
   // 接收前端信息
   $username = $_POST["username"];
   $password = $_POST["password"];
   // 链接数据库
   mysql_connect("localhost","root","root");
   // 选择数据库
   mysql_select_db("test");
   // 定义sql语句
   $sql = "INSERT INTO userinto (username,password) VALUE ('$username','$password') ";
   // 执行sql语句
   mysql_query($sql);
   // 获取影响的行数
   $count = mysql_affected_rows();
   // 关闭链接
   mysql_close();
   // 结果响应
   // if($count){
   //    $arr = array("error" => 1,"msg" => "注册失败");
   // }else{
   //    $arr = arrayy("error" => 0,"msg" => "注册成功")；
   // }
   if ($count == 1) {
      $arr = array("error" => 0, "msg" => "注册成功");
   } else {
      $arr = array("error" => 1, "msg" => "注册失败");
   }
   echo json_encode($arr);
?>