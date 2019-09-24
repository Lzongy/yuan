<?php
session_start();
$uid=$_SESSION["uid"];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
$sql="delete from user_moving where uid='$uid'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>
alert('删除成功，希望你每天开心');
window.location.href='http://localhost:63342/Hopeless/userinfo.html';
</script>";
}else{
    echo "<script>
alert('未知异常');history.go(-1);
</script>";
}
mysqli_close($conn);
?>