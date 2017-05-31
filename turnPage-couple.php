        <?php 
        require_once "plugins/conn2.php";
       header("content-type:text/html;charset=utf-8");
        //这个就是查询数据库的年份	
	if(isset($_GET['page'])){
		$page=intval($_GET['page']);
	}else{
		$page=2017;
	}
        $sql="SELECT * FROM tb_content WHERE content_which='$page' ORDER BY content_id DESC";
        $result=mysql_query($sql);
        if(mysql_num_rows($result)==0){
        ?>
          <div class="entry" data-delay="0">
                <!-- Container -->
                <div class="container">
                    <div class="col-1-3 entry-date">
                        <span class="date">0000-00-00</span>
                        <div class="categories"><a href="#">暂无数据</a></div>
                    </div>

                    <div class="col-2-3 last">
                        <h2 class="entry-title"><a href="#">暂无数据</a></h2>
                                        <!-- Carousel slider -->
                  <!--这里以后判断是否为多图文，若是为多图文那么循环输出
    若是单图文，那么就输出单图文的信息,
    以后改进需自动识别小图，大图或者其他类新的拼图来给出适当的输出返回
    多用if语句就好
                  -->
                        <p class="step-text" style="color: black">暂无数据</p>

                         <a href="#" class="readmore">查看更多</a>
                </div>
                <!-- /Carousel slider -->
                      <!--   <img src="placeholders/news-image02.jpg" alt="News Image" class="aligncenter"> -->
                      
                    </div>
                <!-- /container -->
            </div>
        <?php
        }else{
        while ($re=mysql_fetch_assoc($result)) {
?>
                               <!-- Entry -->
            <div class="entry" data-delay="0">
                <!-- Container -->
                <div class="container">
                    <div class="col-1-3 entry-date">
                        <span class="date"><?=$re['content_time']?></span>
                        <div class="categories"><a href="#"><?=$re['content_uper']?></a></div>
                    </div>

                    <div class="col-2-3 last">
                        <h2 class="entry-title"><a href="#"><?=$re['content_name']?></a></h2>
                                        <!-- Carousel slider -->
                  <!--这里以后判断是否为多图文，若是为多图文那么循环输出
		若是单图文，那么就输出单图文的信息,
		以后改进需自动识别小图，大图或者其他类新的拼图来给出适当的输出返回
		多用if语句就好
                  -->
                        <p class="step-text" style="color: black"><?php 
                $str=$re['content'];
                if(strlen($str)>150){
                $str2=mb_substr($str, 0, 150, 'utf8');
                echo $str2.'.........';
                }else{
                echo mb_substr($str, 0, 150, 'utf8');
                }
                ?></p>

                         <a href="more-couple.php?id=<?=$re['content_id'];?>" class="readmore">查看更多</a>
                </div>
                <!-- /Carousel slider -->
                      <!--   <img src="placeholders/news-image02.jpg" alt="News Image" class="aligncenter"> -->
                      
                    </div>
                <!-- /container -->
            </div>
                <!--若有多余的数据超过第二条那么第二条数据要执行动画操纵-->
<?php
        }
        }
        ?>   
