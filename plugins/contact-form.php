<?php
require_once "conn2.php";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
if($name==""||$eamil==""||$subject==""||$message==""){
echo "<script>alert('留言失败，请重新提交');window.location.href='../contact.html';</script>";
}else{
$sql="INSERT INTO tb_contact SET name='$name',email='$email',subject='$subject',message='$message'";
if (mysql_query($sql)) {
	echo "<script>alert('留言成功');window.location.href='../contact.html';</script>";

}else{
	echo "<script>alert('留言失败，请重新提交');window.location.href='../contact.html';</script>";
}
}
