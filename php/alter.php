<?php
session_start();
$uid=$_SESSION["uid"];
//$introduction=$_POST["introduction"];
$nickname=$_POST["nickname"];
$sex=$_POST["sex"];
$email=$_POST["email"];
$yrs=$_POST["yrs"];
$mon=$_POST["mon"];
$days=$_POST["days"];
$tel=$_POST["tel"];
$conn=mysqli_connect('localhost','root','1234','hopeless');
if (!$conn){
    die('数据库出现未知错误');
}
mysqli_set_charset($conn,'utf8mb4');
$sql= "select  * from userinfo where uid ='$_SESSION[uid]' ";
$result = mysqli_query($conn,$sql);
$data = mysqli_num_rows($result);
if (!$data){
    echo "<script>
alert('用户不存在,请重试');history.go(-1);
</script>";
} else {
    $sql = "update userinfo set nickname='$_POST[nickname]',sex='$_POST[sex]',email='$_POST[email]',yrs='$_POST[yrs]',mon='$_POST[mon]',days='$_POST[days]',tel='$_POST[tel]' where  uid='$_SESSION[uid]'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>
alert('信息更新完成啦');
window.location.href='../userinfo.html';
</script>";
    } else {
        echo "<script>
alert('未知异常，请稍后重试');
</script>";
    }
}
mysqli_close($conn);
?>