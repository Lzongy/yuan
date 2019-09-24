<?php
session_start();
$feedback=$_POST["feedback"];
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
mysqli_set_charset($conn,'utf8mb4');
if(!$conn){
    die("数据库出现未知错误");
}
if($feedback==''){
    echo "<script>
alert('内容为空');history.go(-1);
</script>";
}else {
    $sql = "insert into user_feedback(feedback) values ('$feedback')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> alert('感谢您的反馈');history.go(-1);
</script>";
    } else {
        echo "<script>
alert('未知异常，请稍后重试！');history.go(-1);
</script>";
    }
}
mysqli_close($conn);
?>
