<?php 
session_start();
require_once '../plugins/conn2.php';
 header('content-type:text/html;charset=utf-8;');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

	<head>

		<meta charset="UTF-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

		<title>couple广场</title>

	     <link rel="stylesheet" type="text/css" href="css/normalize.css" /><!--平滑@-->

		<link rel="stylesheet" type="text/css" href="css/icons.css" /><!--引用图标样式-->

		<link rel="stylesheet" type="text/css" href="css/component.css" /><!--侧边栏工具样式-->

		 <link rel="stylesheet" type="text/css" href="css/styles.css"/> <!--整体样式+导航栏动画-->

		<link rel="stylesheet" type="text/css" href="css/timeline.css"/><!--时间轴样式-->

		<script src="js/modernizr.custom.js"></script><!--侧边栏所需要的js-->

		<script src="js/jquery.min.js"></script><!--引用jquery-1.11.3--> 
			<script type="text/javascript">
		//侧栏跟随浏览器
$(function () {
    if ($(".fixed_side").length > 0) {
        var offset = $(".fixed_side").offset();
        $(window).scroll(function () {
            var scrollTop = $(window).scrollTop();
            //如果距离顶部的距离小于浏览器滚动的距离，则添加fixed属性。
            if (offset.top < scrollTop) $(".fixed_side").addClass("fixed");
            //否则清除fixed属性
            else $(".fixed_side").removeClass("fixed");
        });
    }
});

	</script>	

		<script type="text/javascript" src="js/modernizr.js"></script><!--时间轴动画所需要的js-->

		<script src="js/jquery.toTop.js"></script><!--返回顶部js-->

	</head>

	<body>


		<div id="st-container" class="st-container">
<?php 
if (isset($_SESSION['username'])||!empty($_SESSION['username'])) {
	?>
	      <nav class="st-menu st-effect-2" id="menu-2">
        <div class="avatar2">
        <a href="#" title="点击修改个人信息"><span>虾虾皮</span></a>
      </div>
      <ul>
      <li><a class="icon icon-heart" href="#">T^a^的故事</a></li>
      <li><a class="icon icon-diamond" href="#">m_m自己的故事</a></li>
      <li><a class="icon icon-photo" href="#">看看我们的时光相册@_@</a></li>
      <li><a class="icon icon-user" href="#" target="_blank">x0x~修改信息</a></li>
      <li><a class="icon icon-star" href="#" target="_blank">关于Couple日志系统</a></li>
      </ul>
      </nav>
	<?php
}else{
	?>
	<nav class="st-menu st-effect-2" id="menu-2">
	<p style="color: black">ID：100000</p>
        <div class="avatar3">
        <a href="#" title="点击修改个人信息"><span>官方信息</span></a>
      </div>
      <p style="color: black;text-align: center;font-size: 15px;">扫描二维码关注微信公众号</p>
      <img src="images/code.png" alt="" style="width: 250px;height: 250px;padding: 0 auto;margin-left: 25px;">
      <ul>
      <li><a class="icon icon-heart" href="#">登录couple</a></li>
      <li>
<div class="content-style-form content-style-form-1">
					<form>
						<p><label>账号：</label><input type="text" /></p>
						<p><label>密码：</label><input type="password" /></p>
						<p><button>登录</button></p><p><button>取消</button></p>
				</form>
			</div>
        </li>
			


      <li><a class="icon icon-star" href="#" target="_blank">关于Couple日志系统</a></li>
      </ul>
      </nav>
	<?php
}
?>
			<div class="st-pusher">
    <header>
 <nav>
   <ul>
    <li><a href="index.php" >首页</a></li>
    <li><a href="#" >xx</a></li> 
    <li><a href="#" target="_blank">xx</a></li>
    <li><a href="#" target="_blank">xx</a></li>
    <li><a href="#" target="_blank">xx</a></li>
    <li><a href="#" target="_blank">xx</a></li>
    <li><a href="#" target="_blank">商城</a></li>
    <li><a href="#" target="_blank">漂流瓶</a></li>
    <li><a href="#" target="_blank">登录</a></li>
   </ul>
 </nav>
 </header>

				<div class="st-content"><!-- this is the wrapper for the content -->
<!-- 				<div class="" style="position:relative; top: 60px;margin: 0 auto;width: 100%;border: 1px solid red;">
					<ul>
						<li>1、首先是全局（广场）是否合理</li>
						<li>2、bug修改</li>
						<li>3、登录系统的部分界面修改</li>
						<li>4、推送消息的选择，热门等</li>
						<li>5、针对用户固定栏登陆后显示头像，性别，ID，昵称</li>
						<li>6、没登录前显示我自己的相关信息</li>
						<li>7、此部分可以增加样式按钮选择需要的信息更加人性化</li>
						<li>8、点赞，留言，分享与转发系列会在完成相关功能后在上线</li>
						<li>9、现在需要做的是登录看自己的信息，0全部可见1对方可见2仅自己可见</li>
						<li>10、个人信息的修改，ID不可改，昵称只能修改一次！如何知道已经修改过一次还剩最后一次机会了？头像的上传</li>
						<li>11、动画bug优化方案将在6月底完成。</li>
						<li>12、视频播放及详情页的参见将在后期7月份完成。</li>
					</ul>
				</div> -->

<div class="history-date">	
		<section id="cd-timeline" class="cd-container">		
<div class="text">
    <?php 
$sql="SELECT  * FROM tb_content ORDER BY content_id DESC";
$res=mysql_query($sql);
while ($re=mysql_fetch_assoc($res)) {
	?>
		<div class="cd-timeline-block">
		<?php 
			if($re['content_video']!=null){
		?>
			<div class="cd-timeline-img cd-movie">
			<img src="images/cd-icon-movie.svg">
			</div><!-- cd-timeline-img -->
		<?php
			}else{
		?>
			<div class="cd-timeline-img cd-picture">
			<img src="images/cd-icon-picture.svg">
			</div><!-- cd-timeline-img -->
		<?php
			}
		?>
			<div class="cd-timeline-content">
				<h2><?php echo $re['content_name'];?></h2>
				<p><?php 
				$str=$re['content'];
				if(strlen($str)>150){
				$str2=mb_substr($str, 0, 150, 'utf8');
				echo $str2.'.........';
				}else{
				echo mb_substr($str, 0, 150, 'utf8');
				}
				?></p>
				<hr>
				<p><?=$re['content_uper']?></p>
<a href="love.php?x=<?php echo $re['content_id'] ?>" class="cd-read-more" target="_blank">阅读更多</a>
	<span class="cd-date"><?=$re['content_time']?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block --> 
		<!--第一个记录在这里-->

<!--第二个记录在这里-->
		<div class="cd-timeline-block">

			<div class="cd-timeline-img cd-location">
			<img src="images/cd-icon-location.svg">
			</div><!-- cd-timeline-img -->


			<div class="cd-timeline-content">
	<div class="feed-user pr" style="float: left;">
               <a hidefocus href="/user/100000"><img src="images/wxx.jpg!thumb90" width="36" height="36" class="feed-avatar pa" alt="虾虾皮"></a>
               <i class="icon icon-d-share"></i> 
               <a hidefocus href="/user/100000" class="js-convert-emoji c5e5e5e feed-name" itemprop="author"> 虾虾皮</a>
               <meta itemprop="name" content="虾虾皮">
            </div>


            	<div class="feed-user pr" style="float: right;">
            	 <a hidefocus href="/user/100001" class="js-convert-emoji c5e5e5e feed-name" itemprop="author">皮皮虾</a>
            	 <i class="icon icon-d-share"></i> 
               <a hidefocus href="/user/100001"><img src="images/wxx.jpg!thumb90" width="36" height="36" class="feed-avatar pa" alt="虾虾皮"></a>
                 <meta itemprop="name" content="皮皮虾">
            </div>

            <div style="clear: right;">
            		<p>这个是针对couple的广场设计，这个是针对couple的广场设计这个是针对couple的广场设计这个是针对couple的广场设计这个是针对couple的广场设计</p>
		<hr>
	<video src="../ppx.mp4" poster="../images/timg3.jpg" style="height:480px;width: 400px;" controls="controls"></video>

             <div class="detail-count no-select">

	<span class="feed-like dbl pr cp"  title="喜欢">
	<i class="icon icon-d-like"><img src="images/love.png"></i>
             <span class="pr top-2">520</span>
             <meta itemprop="ratingValue" content="520个赞">
             </span>


             <a hidefocus href="/media/755184572" target="_blank" class="feed-comment dbl pr cp" title="评论">
             <i class="icon icon-d-command"><img src="images/comment.png"></i>
             <meta itemprop="itemReviewed" content="boyqian想唱歌">
             <span class="pr top-3" itemprop="reviewCount">13</span>
             </a>

       	<span class="feed-share none dbl pr cp">
	<i class="icon icon-d-share"><img src="images/share.png"></i> 
	<span class="pr top-3">分享</span>
        	</span>

        	<span class="feed-repost dbl pr cp">
	<i class="icon icon-d-repost"><img src="images/repost.png"></i> 转发
	</span>

        	<span class="cd-date"><?=$re['content_time']?></span>
        </div>    

	
	</div> 


	</div> <!-- cd-timeline-content -->
            </div><!-- cd-timeline-block --> 
<!--第二个记录在这里-->

<!--第三个记录在这里-->
		<div class="cd-timeline-block">

			<div class="cd-timeline-img cd-movie">
			<img src="images/cd-icon-movie.svg">
			</div><!-- cd-timeline-img -->
			<div class="cd-timeline-content">

            <div class="feed-user pr">
               <a hidefocus href="/user/1483830187">
                    <img src="images/wxx.jpg!thumb90" width="36" height="36" class="feed-avatar pa" alt="虾虾皮">
               </a>
                <a hidefocus href="/user/1483830187" class="js-convert-emoji c5e5e5e feed-name" itemprop="author">
                  虾虾皮
                 </a>
                   <meta itemprop="name" content="虾虾皮">
	<span class="feed-time pa" itemprop="datePublished">
	今天10:46
	</span>
                <meta itemprop="uploadDate" content="2017-05-18">
            </div>
                          
              <div class="feed-v-wrap pr loading">
                       <img src="http://mvimg10.meitudata.com/591d0acc3ce2a6089.jpg!thumb420" width="420" height="420" alt="你一一起来" itemprop="thumbnailUrl">
                    <div class="pa pai">
                        <div class="feed-video pr cp" data-feed="6421300762705605564" data-id="755184572" data-video="">
                            <span class="pa detail-play"></span>
                        </div>
                    </div>
               </div>
                        
            <a class="js-convert-emoji feed-description break" href="/media/755184572" >
                <meta itemprop="url" content="/media/755184572">
                 翻唱《似曾》旖旎红楼追往昔。
                 <span class="js-span-a f-a-topic" data-href="" itemprop="about" itemscope itemtype="http://schema.org/Thing">#音乐#<meta itemprop="url" content=""></span>
                 <span class="js-span-a f-a-topic" data-href="" itemprop="about" itemscope itemtype="http://schema.org/Thing">#我要上热门#<meta itemprop="url" content=""></span>
                 <span class="js-span-a f-a-topic" data-href="" itemprop="about" itemscope itemtype="http://schema.org/Thing">#翻唱#<meta itemprop="url" content=""></span>          
            </a>

             <div class="detail-count no-select">

       	<span class="feed-share none dbl pr cp">
	<i class="icon icon-d-share"><img src="images/share.png"></i> 
	<span class="pr top-3">分享</span>
        	</span>

        	<span class="feed-repost dbl pr cp">
	<i class="icon icon-d-repost"><img src="images/repost.png"></i> 转发
	</span>

             <a hidefocus href="/media/755184572" target="_blank" class="feed-comment dbl pr cp" title="评论">
             <i class="icon icon-d-command"><img src="images/comment.png"></i>
             <meta itemprop="itemReviewed" content="boyqian想唱歌">
             <span class="pr top-3" itemprop="reviewCount">13</span>
             </a>

	<span class="feed-like dbl pr cp"  title="喜欢">
	<i class="icon icon-d-like"><img src="images/love.png"></i>
             <span class="pr top-2">520</span>
             <meta itemprop="ratingValue" content="520个赞">
             </span>

        	<span class="cd-date"><?=$re['content_time']?></span>
        </div>      

</div>
</div>
<!--第三个记录在这里-->
<?php 
}
?>
</div>
	</section>	
<footer>
	<p>
            非商业用途可copy,2017- &copy;版权所有<a href="contact.html">boyqian</a>
 <a href="http://www.miitbeian.gov.cn/" title="" target="_blank"><img src="images/police.png" alt="">渝ICP16003938-1号</a>
        </p>
</footer>
</div><!--history-->
	

							<div id="st-trigger-effects" class="fixed_side">
     							<div class="avatar">
          							<a href="Own/own.php" title="点击修改个人信息"><span>虾虾皮</span></a>
      							</div>
     							<div id="st-trigger-effects" class="column">       
                						<button data-effect="st-effect-2">菜单</button> 
    							 </div>
      							<section class="topspaceinfo">
        							<h1>离楼青梅往事伊人</h1>
        							<p>我于千万人之中，遇见了我所爱的你</p>
     							 </section>
							</div>





				</div><!-- /st-content -->
<a class="to-top">返回顶部</a>
			</div><!-- /st-pusher -->

		</div><!-- /st-container -->

		<script src="js/classie.js"></script>

		<script src="js/sidebarEffects.js"></script>

 <script>
$(function(){
	var $timeline_block = $('.cd-timeline-block');
	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});
	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});
</script> 
<script>
$(function() {
	$('.to-top').toTop();
});
</script>
	</body>

</html>