<?php
session_start();
$uid=$_SESSION['uid'];
$email=$_POST['email'];
$conn=mysqli_connect('127.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
  die('数据库连接异常');
}
    $cemail="select email from userinfo where $uid='$_SESSION[uid]'";
    $res=mysqli_query($conn,$cemail);
    if(!$res){
        echo "<script>
alert('无效邮箱地址请，请重试');
history.go(-1);
</script>";
    }else {
        $sql = "delete from userinfo where uid='$_SESSION[uid]' and email='$email' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>
alert('来日可期 下次见');
window.location.href='http://localhost:63342/Hopeless/index.html';
</script>";
        } else {
            echo "<script>
alert('注销失败，请检查相关信息');history.go(-1);
</script>";
        }
    }
mysqli_close($conn);
        session_destroy();
?>