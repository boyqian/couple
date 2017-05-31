        <?php 
        require_once "plugins/conn.php";
       header("content-type:text/html;charset=utf-8");
        //这个就是查询数据库的年份	
	if(isset($_GET['page'])){
		$page=intval($_GET['page']);
	}else{
		$page=2017;
	}
        $limitSql=5;//一篇显示5个
        //涉及到加密操作
        $showPage=(2017%$page)*$limitSql;
        $sql="SELECT * FROM img_me WHERE img_year='$page' ORDER BY img_id DESC LIMIT ".$showPage.",$limitSql";
        $result=mysql_query($sql);
        while ($re=mysql_fetch_assoc($result)) {
?>
                               <!-- Entry -->
            <div class="entry" data-delay="0">
                <!-- Container -->
                <div class="container">
                    <div class="col-1-3 entry-date">
                        <span class="date"><?=$re['img_date']?></span>
                        <div class="categories"><a href="#"><?=$re['img_belong']?></a></div>
                    </div>

                    <div class="col-2-3 last">
                        <h2 class="entry-title"><a href="#"><?=$re['img_name']?></a></h2>
                                        <!-- Carousel slider -->
                  <!--这里以后判断是否为多图文，若是为多图文那么循环输出
		若是单图文，那么就输出单图文的信息,
		以后改进需自动识别小图，大图或者其他类新的拼图来给出适当的输出返回
		多用if语句就好
                  -->
                  <?php 
                  if($re['img_ismutil']==1){
                    //多图文
                    $img_string=$re['img_src'];
                    $img_src=explode(',', $img_string);
                    $img_length=count($img_src);
                  for($i=0;$i<$img_length;$i++) {
                      $img=$img_src[$i];
                      echo "<img id='img_img' src=".$img." alt='".$re['img_name']."' style='width: 120px;height: 160px;' /> ";
                    }
                  }else{
                    //单图文
                    ?>
                    <img src="<?=$re['img_src'];?>" alt="<?php echo "图片加载失败";?>" style="width: 80px;height: 120px;">
                    <?php 
                  }
                  ?>
                        <p class="step-text" style="color: black">描述：<?=$re['img_word']?></p>

                         <a href="#" class="readmore">换换视角</a>
                </div>
                <!-- /Carousel slider -->
                      <!--   <img src="placeholders/news-image02.jpg" alt="News Image" class="aligncenter"> -->
                      
                    </div>
                <!-- /container -->
            </div>
                <!--若有多余的数据超过第二条那么第二条数据要执行动画操纵-->
<?php
        }
        ?>   

