<?php
// 接收前端发来的信息
$username = $_GET["username"];
// 链接数据库
mysql_connect("localhost","root","root");
// 选择数据库
mysql_select_db("test");
// 定义sql语句
$sql = "SELECT * FROM userinto WHERE username = '$username'";
// 执行sql语句
$res = mysql_query($sql);
$count = mysql_num_rows($res);
// 判定$count
if($count){
   $arr = array("error" => 1,"msg" => "用户名已存在，不可使用");
}else{
   $arr = array("error" => 0,"msg" => "用户名可用");
}
echo json_encode($arr);
?>