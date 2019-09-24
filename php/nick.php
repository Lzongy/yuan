<?php
session_start();
$uid=$_SESSION['uid'];//读取session记录
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
$sql="select nickname,introduction from userinfo where uid='$_SESSION[uid]'"; //从数据库中查询昵称
mysqli_set_charset($conn,'utf8mb4');
$res=mysqli_query($conn,$sql);
$dataarray=array();
if($rows=mysqli_fetch_assoc($res)){ //遍历数据库
    array_push($dataarray,$rows);
}
$data=json_encode($dataarray);//json编码解析
print_r($data);//print_r($arrry) 输出数组
mysqli_close($conn);
?>