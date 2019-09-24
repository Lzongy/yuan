<?php
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
if(!$conn){
    die("数据库连接失败");
}
$sql="select userinfo.nickname,user_moving.moving,user_moving.publishtime from user_moving,userinfo where user_moving.uid=userinfo.uid";
mysqli_set_charset($conn,'utf8mb4');
$res=mysqli_query($conn,$sql);
$movingarray=array();
while($rows=mysqli_fetch_assoc($res)){ //遍历数据库
    array_push($movingarray,$rows);
}
$data=json_encode($movingarray);//json编码解析
print_r($data);//print_r($arrry) 输出数组
mysqli_close($conn);

?>