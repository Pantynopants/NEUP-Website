<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link href="<?php bloginfo('template_url'); ?>/style/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style/neup.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.2.3.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script>
        $(function () {
            $("#tabs1 a").mousemove(function (e) {
                $(this).tab('show');
            });
            $("#tabs2 a").mousemove(function (e) {
                $(this).tab('show');
            });
            $("#tabs3 a").mousemove(function (e) {
                $(this).tab('show');
            });
            $("#tabs4 a").mousemove(function (e) {
                $(this).tab('show');
            });
        });
    </script>
    <title>无标题文档</title>
</head>

<body class="bg">
    <div class="line1">
        <div class = "banner"></div>
        <nav class="menubar">
            <ul class="nav nav-justified">
                <li class="active"><a href="#" style="color:red">先锋首页</a></li>
                <li><a href="#" style="color:white">东大共青团</a></li>
                <li><a href="#" style="color:white">学生组织</a></li>
                <li><a href="#" style="color:white">网上团支部</a></li>
                <li><a href="#" style="color:white">青年之声</a></li>
                <li><a href="#" style="color:white">先锋论坛</a></li>
                <li><a href="#" style="color:white">文件下载</a></li>
                <li><a href="#" style="color:white">友情链接</a></li>
            </ul>
        </nav>
    </div>
    <div class="line2">

        <div id="myCarousel" class="line20 carousel slide" data-ride="carousel">
                    <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
              <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php bloginfo('template_url'); ?>/images/2_1.png" alt="First slide">
                    <div class="carousel-caption">1</div>
                </div>
                <div class="item">

                    <img src="<?php bloginfo('template_url'); ?>/images/2_1.png"  alt="Second slide">
                    <div class="carousel-caption">2</div>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/images/2_1.png" alt="Third slide">
                    <div class="carousel-caption">3</div>
                </div>
            </div>
              <!-- 轮播（Carousel）导航 -->
              <a class="carousel-control left" href="#myCarousel"
                 data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#myCarousel"
                 data-slide="next">&rsaquo;</a>
        </div>

        <div class="line21">
            <div class="line211 frame">
                <div class="line211a"><p>先锋新闻</p></div>
                <div class="line211b"></div>
                <div class="line211c">
                    <a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留守儿童，估算约1亿的消息上了微博热搜榜，随后，各大媒体官号相继转发，这源于中国青年报中青在线的一篇题为“我国将首次摸清留守儿童底数”的报道。（点击看全文）</a>
                </div>
            </div>
            <div class="line212 frame">
                <div class="line212a1"><h4>外媒聚焦</h4></div>
                <div class="line212a2"><a href="#">more>></a></div>
                <div class="line212b"></div>
                <div class="line212c">
                    <ul class="disc"> 
                        <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'category_name' => "qqq", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>" class="a"><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?> 
                    </ul>
                </div>
            </div>
            <div class="line213 frame">
                <div class="line213a1"><h4>通知公告</h4></div>
                <div class="line213a2"><a href="#">more>></a></div>
                <div class="line213b"></div>
                <div class="line213c">
                    <ul class="disc">
                        <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'cat' => 3, // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>" calss="a"><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
            <div class="line214 frame">
                <div class="line214a">
                    <ul class="disc">
                        <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'category_name' => "qqq", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>" calss = a><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?>
                </div>
            </div>
            <div class="line215 frame">
                <div class="line215a1"><h4>学院团讯</h4></div>
                <div class="line215a2"><a href="#">more>></a></div>
                <div class="line215b"></div>
                <div class="line215c">
                    <ul class="disc">
                        <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'category_name' => "qqq", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
            <div class="line216 frame">
                <div class="line216a1"><h4>活动预告</h4></div>
                <div class="line216a2"><a href="#">more>></a></div>
                <div class="line216b"></div>
                <div class="line216c">
                    <ul class="disc">
                        <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'category_name' => "qqq", // 分类名为qqq
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="line22">
            <div class="line221"></div>
            <div class="line222"></div>
        </div>
    </div>


    <div class="line3">
        <!-- Example row of columns -->
        <!-- <div class="row"> -->
        <div class="col-md-4 line31 frame">
            <div class="container">
                <div class="row">
                    <ul class="nav-tabs nav" id="tabs1"><li class="line3-active"><a href="#tabs-1" id="line3-head1">思想引领行动 </a></li>
                        <li><a href="#tabs-2" id="line3-head2">素质拓展行动</a></li>
                        <li><a href="#tabs-3" id="line3-head3">权益服务行动</a></li>
                        <li><a href="#tabs-4" id="line3-head4">组织提升行动</a></li>
                    </ul>
                    <div class="tab-content" style="background-image: url(<?php echo bloginfo('template_url'); ?>/images/8243B997-6573-4F31-8A65-49B22E085D8F.png)">
                        <div class="tab-pane active" id="tabs-1">
                            <div style="background-color: rgb(238,131,34);height: 10px;margin-top: 0px"></div>
                            <div class="tab-pane-content-1">
                                <dt><a href="#">主题团日</a></dt>
                                <dt><a href="#">四进四信</a></dt>
                                <dt><a href="#">青马工程</a></dt>
                                <dt><a href="#">社会实践</a></dt>
                                <dt><a href="#">智慧社区</a></dt>
                            </div>
                            <div class="tab-pane-content-2">
                                <img src="<?php echo bloginfo('template_url'); ?>/images/1657B9A7-C380-46B2-9F8C-DEC8EF51D8AA.png">
                            </div>
                            <div class="tab-pane-content-3">
                                <ul style="margin: 0;padding: 0;">
                                <dl>
                                <?php 
                                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                                    $args=array( 
                                    'category_name' => "qqq", // 分类ID为1
                                    'posts_per_page' => 4, // 只显示4篇
                                    'paged'=>$paged, 
                                    ); 
                                    query_posts($args); 

                                    if (have_posts()) : while (have_posts()) : the_post(); 
                                    ?> 
                                    <dt><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a><dt> 
                                    <?php endwhile; endif; wp_reset_query();?>
                                    <div class="clear"></div>
                                </dl>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2">
                            <div style="background-color: rgb(252,206,47);height: 10px;margin-top: 0px"></div>
                            skdfjlsdjlfjdsl
                        </div>
                        <div class="tab-pane" id="tabs-3">
                            <div style="background-color: rgb(254,239,53);height: 10px;margin-top: 0px"></div>
                            lalalalalllalalalal
                        </div>
                        <div class="tab-pane" id="tabs-4">
                            <div style="background-color: rgb(234,229,50);height: 10px;margin-top: 0px"></div>
                            lalalalalalallljkldsfjklsdjfkldsjfkldsjfklds
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="line32">
            <div class="line32a1"><h4>活力支部</h4></div>
            <div class="line32a2"><a href="#">more>></a></div>
            <div class="line32b"></div>
            <div class="line32c1">
                <ul class="disc">
                    <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                        $args=array( 
                        'category_name' => "qqq", // 分类ID为1
                        'posts_per_page' => 4, // 只显示4篇
                        'paged'=>$paged, 
                                    ); 
                        query_posts($args); 

                        if (have_posts()) : while (have_posts()) : the_post(); 
                        ?> 
                        <li><a href="<?php the_permalink(); ?>" class="a"><?php the_title(); ?></a></li> 
                        <?php endwhile; endif; wp_reset_query();?>
                </ul>
            </div>
            <div class="line32c2"></div>
        </div>
        <div class="col-md-4 line33 frame">
            <div class="line33a1"><h4>先锋排行</h4></div>
            <div class="line33a2"><a href="#">more>></a></div>
            <div class="line33b"></div>
        </div>
        <!-- </div> -->
    </div> <!-- /container -->

    <div class="line4">
        <div class="line41 frame">

        </div>
        <div class="line42 frame">
            <div class="line42a"></div>
            <div class="line42b"><h4>专题一  学习之路</h4></div>

        </div>
        <div class="line43 frame">
            <div class="line43a"></div>
            <div class="line43b"><h4>专题二  青年之声</h4></div>

        </div>
        <div class="line44 frame">
            <div class="line44a"><p>活动专题</p></div>
            <!--<div class="line44b"></div>
            <div class="line44c1"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/1.png" border="0"></a></div>
            <div class="line44c2"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/2.png" border="0"></a></div>
            <div class="line44c3"><a href="#"><img src="<?php echo bloginfo('template_url'); ?>/3.png" border="0"></a></div>-->

        </div>
    </div>

    <!-- </div> -->
    <footer class="foot">
    </footer>
</body>
</html>
