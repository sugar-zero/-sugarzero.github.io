<?php
// �������ݿ�����
$servername="localhost";
$username="���ݿ���";
$password="���ݿ�����";
$testgame="���ݿ��";

$conn = new mysqli($servername,$username,$password,$testgame);//��php��mysqli��Ϊmysql
mysqli_query($conn,'set names utf8');
?>