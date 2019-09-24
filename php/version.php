<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<head>
    <title>版本信息</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        a:hover{cursor: pointer;}
        </style>
</head>
<body>
<?php
echo "<p><a href='javascript:history.go(-1)' style='text-decoration: none;color: #6495ED'> < < 返回上一步</a></p>";
echo "<br><p style='font-size: 17px;text-align: center'>浏览器版本信息:".$_SERVER['HTTP_USER_AGENT']."</p>";
echo "<br><p align='center'>软件版本：V1.0</p>";
?>
</body>
</html>
