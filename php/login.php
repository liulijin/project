<?php
header('content-type:text/html;charset="utf-8"');
// 接收前端发送过来的信息
$username = $_GET["username"];
$password = $_GET["password"];
// echo $username;
// echo $password;
// 连接数据库
mysql_connect("localhost","root","root");
// 选择数据库
mysql_select_db("test");
// 定义sql语句
$sql = "SELECT * FROM userinto WHERE username='$username' AND password='$password'";
// 执行sql语句
$res = mysql_query($sql);
// echo $res;
// $count = mysql_num_rows($res);
$count = mysql_affected_rows();
// echo $count;
// $i = 0;
// while($row = mysql_fetch_array($res)){
//    $i++;
// };
// 关闭链接
mysql_close();
if($count == 1){
   $arr = array("error" => 0,"msg" => "登录成功");
}else{
   $arr = array("error" => 1,"msg" => "登录失败");
}
// if($i == 1){
//    $arr = array("error" => 1,"msg" => "登录成功");
// }else{
//    $arr = array("error" => 0,"msg" => "登录失败");
// }
echo json_encode($arr);
?>