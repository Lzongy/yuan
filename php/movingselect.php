<?php
header('Content-Type: application/json');
session_start();
$uid=$_SESSION["uid"];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless','3306');
if(!$conn){
    die("数据库出现未知错误");
}
mysqli_set_charset($conn,'utf8mb4');
$sql="select moving,publishtime from user_moving where uid='$_SESSION[uid]'";
$result=mysqli_query($conn,$sql);
$data=array();
while($rows=mysqli_fetch_assoc($result)){ //遍历数据库
    array_push($data,$rows);
}
$dataarray=json_encode($data);//json编码解析
print_r($dataarray);//print_r($arrry) 输出数组
mysqli_close($conn);
?>

