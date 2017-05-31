<?php
  include("../plugins/conn2.php");
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php 
//x是contetn_id
$x=intval($_GET['x']);
$sql="SELECT  * FROM tb_content WHERE content_id=$x";
$res=mysql_query($sql);
$re=mysql_fetch_assoc($res);
echo $re['content_name'].'-'.'couple';
?>
</title>
<link rel="icon" href="favicon.ico">
<link href="css/timeline2.css" rel="stylesheet" type="text/css" />
<style type="text/css" >
	/*style="width: 240px;height: 300px;"*/
	.video-wrapper{
		overflow: hidden;
	}
	.video-wrapper  .controls{
		position: absolute;
		height: 40px;
		width: 40px;
		margin: auto;
		background: rgba(0,0,0,.5);
	}
	.video-wrapper video{
				width: 240px;
		height: 300px;
	}
	.video-wrapper  button{
		display: block;
		width: 100%;
		height: 100%;
		border: 0;
		cursor: pointer;
		font-size: 36px;
		color: #fff;
		background: transparent;
	}
	.video-wrapper button[pause]{
		font-size: 30px;
	}
</style>
</head>
<body>
	<section class="cd-container">
	<div class="cd-timeline-content">
		<h2><?=$re['content_name']?></h2>
	<p><?=$re['content']?></p>
		<div>
		<?php 
//这里写数据库中图片的逻辑，图片不止一个的时候循环输出
		?>
	我是图片区
		</div>
			<div>
			<?php 
//这里写数据库中有逻辑，视频不止一个的时候需循环得到地址输出
			?>
			<div class="video-wrapper">
				<video  id="movie"  controls>
		<source src="../../Upload/Video/前奏1.mp4">
				</video>
			</div>

			</div>
	<!--需要权限的信息y，对我的不可见id的y无效提示你无权修改信息，或者在这里根据不同的用户输出不同的页面方式，只有本人才能执行修改操作，其他人的视角不可见-->
		<?php 
		//此处用cookie来判断是否是同一个用户
		if($re['content_uper']==$_COOKIE['username']){
		?>
	<a href="editLove.php?y=<?php echo urlencode($re['content_id']);?>" class="cd-read-more" title="修改">修改</a>
	<!--优化设计，不是返回页面而是返回页面的某行-->
	<a href="index.php" title="返回" class="cd-read-more">返回</a>
		<?php
		}else{
		?>
	<!--优化设计，不是返回页面而是返回页面的某行-->
	<a href="index.php" title="返回" class="cd-read-more">返回</a>
		<?php
		}
		?>
	<span class="cd-date"><?=$re['content_uper']?></span>
	</div> <!-- cd-timeline-content -->
	</section>

<script src="js/player.js" type="text/javascript" ></script>
</body>
</html>
