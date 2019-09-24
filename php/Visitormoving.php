<?php
header('Content-Type: application/json');
session_start();
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless','3306');
if(!$conn){
    die("数据库出现未知错误");
}
mysqli_set_charset($conn,'utf8mb4');
$sql="select userinfo.nickname, user_moving.moving,user_moving.publishtime from user_moving,userinfo";
$res=mysqli_query($conn,$sql);
$vistors=array();
while($rows=mysqli_fetch_assoc($res)){ //遍历数据库
    array_push($vistors,$rows);
}
$msg=json_encode($vistors);//json编码解析
print_r($msg);//print_r($arrry) 输出数组
mysqli_close($conn);
?>

