<?php
session_start();
$conn=mysqli_connect('127.0.0.1','root','1234','hopeless');
if(!$conn){
    die('数据库出现未知错误');
}
mysqli_set_charset($conn,'utf8');
$action=isset($_REQUEST['action'])? $_REQUEST['action']:'';
if($action == 'add'){
    $image = mysqli_real_escape_string(file_get_contents($_FILES['photo']['tmp_name']));
    $type = $_FILES['photo']['type'];
    $sql = "insert into photo(name,type) values('$type','$image')";
    if(mysqli_query($conn,$sql)){
        echo "<script>
alert('发布成功🔅');
window.location.href='http://localhost:63342/Hopeless/userpic.html';
</script>";
    }
}else{
    echo "<script>
alert('未知异常，上传失败');history.go(-1);
</script>";
}
mysqli_close($conn);
?>
