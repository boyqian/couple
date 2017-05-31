<?php
require_once "../plugins/conn2.php";
if($_POST['password']==''){
header("Location:/resgister.html?action=accout");
}else{ 
$nickname=$_POST['nickname'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$truename=$_POST['truename'];
$cardid=$_POST['cardid'];
$sql="INSERT INTO tb_user SET nickname='$nickname',sex='$sex',email='$email',phone='$phone',password='$password',truename='$truename',cardid='$cardid'";
$result=mysql_query($sql);
if($result){
	echo "<script>window.location.href='index.html'</script>";
}else{
	echo "<script>window.location.href='resgister.html'</script>";
}
}
