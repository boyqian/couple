<?php 
session_start();
require_once "plugins/conn2.php";
$id=intval($_GET['id']);
$sql="SELECT * FROM tb_content WHERE content_id='$id'";
$result=mysql_query($sql);
while ($re=mysql_fetch_assoc($result)){
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en-US"><!--<![endif]-->
<head>
    <title><?=$re['content_name'];?></title>
   <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <![endif]-->
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="Premium theme.">
    <meta name="keywords" content="boyqian"/>
    <meta name="author" content="boyqian">
    <!-- Fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- <meta name="robots" content="index,follow"> -->

    <!-- ############################# Stylesheets ############################# -->

    <link rel="stylesheet" href="css/style.css" media="screen" />

    <!-- ############################# Javascript - Modernizr ############################# -->

    <script src="js/modernizr.custom.js"></script>

</head>
<body>
<!--[if lte IE 8]>
<div id="ie6-message"><p>You are using Internet Explorer 8.0 or older to view the web. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->

<!-- ############################# Page ############################# -->
<section id="page">

    <!-- ############################# Header ############################# -->
    <header id="header">
        <div class="container">
            <!-- ############################# Logo ############################# -->
             <a id="logo" href="index.html" class="smooth-link"><img src="placeholders/logo2.png" alt="Logo"></a>

            <!-- ############################# Menu ############################# -->
            <!-- Menu Tigger -->
            <a href="#" id="menu-trigger"><span class="icon"></span></a>
            <!-- /menu Tigger -->
        </div>
         <!-- Menu Container -->
        <div id="menu-container">
            <div class="container">
                <h3 class="nav-title">菜单</h3>
                <div class="divider white"></div>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">首页</a></li>
                        <li><a href="portfolio.html">归档</a></li>
                        <li><a href="about.html">我们的故事</a></li>
                        <li><a href="contact.html">联系boyqian</a></li>
                        <li><a href="#" class="active">Couple介绍</a></li>
                    </ul>
                </nav>
            </div>
            <div class="overlay"></div>
        </div>
    </header>

    <!-- ############################# Intro Image ############################# -->
    <section id="intro-image" class="intro medium clearfix">
        


        <!-- Image -->
        <div class="image zoom news-intro"></div>

        <!-- Overlay -->
        <span class="overlay animated"></span>

    </section>

    <!-- ############################# Page Content ############################# -->
    <section id="content">
         

               <!-- ############################# Single News ############################# -->
        <article class="single-news container">

            <blockquote>
                <p><?=$re['content_time'];?></p>
            </blockquote>
            <div class="categories"><a href="#"><?=$re['content_uper'];?></a></div>

            <h2 class="entry-title"><a href="#"><?=$re['content_name'];?></a></h2>
            
            <p class="excerpt"><?=$re['content'];?></p>


            <p></p>
                        <!-- Image with caption and lightbox -->
            <div class="caption">
                <a href="placeholders/news-single02.jpg" class="imagebox zoom-thumb" title="归档所属位置(今后可点击)">
                    <img src="placeholders/news-single02.jpg" alt="News Single" >
                </a>
                <p class="caption-text">这里将来图片所属归档</p>
            </div>
                        <a href="portfolio-couple.html"><span>返回</span></a>
        </article>
        <!-- /entry -->
<?php 
}
?>
    </section>
    <!-- /content -->

     <!-- Footer Note -->
    <div id="footer-note">
        <p>
                非商业用途可copy,2017- &copy;版权所有<a href="contact.html">boyqian</a>
        </p>
    </div>
    <!-- /footer note -->

</section>
<!-- /page -->

    <!-- ############################# Javascripts ############################# -->
    <script src="js/jquery.min.js"></script>     
    <script src="js/jquery.easing-1.3.min.js"></script>
    <script src="js/jquery.queryloader2.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.transit.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.small.plugins.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script src="js/retina.min.js"></script>

    <!-- Custom scripts -->
    <script src="js/custom.js"></script>
</body>
</html>
