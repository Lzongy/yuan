<?php
session_start();
$uid=$_POST['uid'];
$oldpsd=$_POST['password'];
$password=$_POST['password'];
$checkpsd=$_POST['checkpsd'];
$email=$_POST['email'];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
    die("数据库出现未知错误");
}
if($password!==$checkpsd){
    echo "<script>
alert('密码不一致');history.go(-1);
</script>";
}
if($uid!=''){
    $sql = "select * from userinfo where uid='$uid' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_num_rows($result);
    if (!$data) {
        echo "<script>
alert('用户不存在,请重试');history.go(-1);
</script>";
        }
    }
if($oldpsd!=''){
    $old="select password from userinfo where uid='$uid'";
    $res=mysqli_query($conn,$sql);
    $data2=mysqli_num_rows($res);
    if(!$data2){
        echo "<script>
alert('原密码输入错误');
history.go(-1);
</script>";
    }
}
if($email!='') {
    $emailsql = "select email from userinfo where uid='$uid'";
    $result1 = mysqli_query($conn, $emailsql);
    $data1 = mysqli_num_rows($result1);
    if (!$data1) {
        echo "<script>alert('请检查邮箱地址');history.go(-1);</script>";
    } else {
        $sql = "update userinfo set password='$_POST[password]',checkpsd='$_POST[checkpsd]' where  uid='$uid' and email='$email'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>
alert('密码更新完成');
window.location.href='http://localhost:63342/Hopeless/login.html';
</script>";
        } else {
            echo "<script>
alert('未知异常，请重试');
</script>";
        }
    }
}
mysqli_close($conn);s
?>
