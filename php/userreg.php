<?php
session_start();
$nickname=$_POST['nickname'];
$password=$_POST['password'];
$checkpsd=$_POST['checkpsd'];
$sex=$_POST['sex'];
$yrs=$_POST['yrs'];
$mon=$_POST['mon'];
$days=$_POST['days'];
$email=$_POST['email'];
$uid =  str_pad(mt_rand(1, 9999), 5, '1', STR_PAD_LEFT);//生成ID
//表单校验
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
    die('数据库出现未知错误');
}
        //邮箱查重
        $cemail = "select * from userinfo where email='$email'";
        $results = mysqli_query($conn, $cemail);
        $datas = mysqli_num_rows($results);
        if ($datas) {
            echo "<script>
alert('该邮箱已注册，请更换');history.go(-1);
</script>";
            }else {
            $sql = "insert into userinfo(nickname,password,checkpsd,sex,yrs,mon,days,email,uid) 
value ('$nickname','$password','$checkpsd','$sex','$yrs','$mon','$days','$email','$uid')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>
alert('注册完成！ \\n \\n 欢迎你,$nickname    你的账号ID是<$uid>');
window.location.href='http://localhost:63342/Hopeless/login.html';
</script>";
            } else {
                echo "<script>
alert('未知异常，请稍后重试');history.go(-1);
</script>";
            }
        }
mysqli_close($conn);
?>