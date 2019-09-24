<?php
session_start();
$uid=$_SESSION["uid"];
$introduction=$_POST["introduction"];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
    die('数据库连接异常');
}
if($uid==""){
    echo "<script>
alert('⚠️当前没有用户在线,请登录后重试');history.go(-1);
</script>";
}else{
$sql="update userinfo set introduction='$_POST[introduction]' where uid='$_SESSION[uid]'";
if(mysqli_query($conn,$sql)){
    echo "<script>
alert('更新完成');
window.location.href='http://localhost:63342/Hopeless/userinfo.html';
</script>";
}else{
    echo "<script>
alert('未知异常，请重试');history.go(-1);
</script>";
}
}
mysqli_close($conn);
?>