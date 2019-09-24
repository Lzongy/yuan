<?php
session_start();
$uid=$_POST['uid'];
$password=$_POST['password'];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
    die('数据库出现未知错误');
}else{
    $sql="select uid,password from userinfo where uid='$uid' and password='$password' ";
   $result=mysqli_query($conn,$sql);
    $number=mysqli_num_rows($result);
    if($number){
        echo "<script>
window.location.href='http://localhost:63342/Hopeless/userinfo.html';
</script>";
    }else{
        echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
    }
}
if($_POST['uid']==$uid && $_POST['password']==$password){
    $_SESSION['logined']=1; //判断是否登录成功
    $_SESSION['uid']=$uid; //存储id
}else{
    echo "<script>
alert('error,cannot insert into session');
</script>";
}
mysqli_close($conn);
?>
