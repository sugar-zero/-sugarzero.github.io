<?php
// 创建数据库连接
$servername="localhost";
$username="数据库名";
$password="数据库密码";
$testgame="数据库表";

$conn = new mysqli($servername,$username,$password,$testgame);//非php7.0+把mysqli改为mysql7
mysqli_query($conn,'set names utf8');
?>
