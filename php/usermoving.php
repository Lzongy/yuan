<?php
session_start();
$uid=$_SESSION['uid'];
$moving=$_POST['moving'];
$conn=mysqli_connect('localhost','root','1234','hopeless');
if(!$conn){
    die("数据库出现未知错误");
}
mysqli_set_charset($conn,'utf8mb4');
$sql="insert into user_moving (uid,moving) values ('$uid','$moving')";
//$row=$conn->query($sql);
if(mysqli_query($conn,$sql)){
    echo "<script>
alert('发布成功！出现在主页啦');
window.location.href='../userinfo.html';
</script>";
}else{
    echo "<script>
alert('未知异常，发布失败');history.go(-1);
</script>";
}
mysqli_close($conn);
?>
