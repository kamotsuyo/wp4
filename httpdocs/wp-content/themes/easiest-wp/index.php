<!DOCTYPE HTML>
<html <?php language_attributes();?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--wp_head()関数をheadタグの直前に追記-->
    <?PHP wp_head();?>
</head>

<body <?php body_class()?>>
    <header class="page-header">
        <div class="header-area">
            <div class="panel-site-title">
                <p class="site-title">
                    <a href="<?php echo esc_url(home_url());?>">
                        <?php bloginfo("name");?>
                    </a>
                </p>
                <p class="site-subtitle">
                    <?php bloginfo("description");?>
                </p>
            </div>
            <!--グローバルナビゲーションメニュー-->
            <?php
            if(has_nav_menu('global')):
                $global_menu_array = array('theme_location'=>'global'
                                           ,'menu_id'=>'global-menu'
                                           ,'container'=>'nav'
                                           ,'container_class'=>'global-nav');
                wp_nav_menu($global_menu_array);        
                
            endif;
            ?>


        </div>
    </header>


    <div class="hero"></div>
    <div class="content-area has-side-col">
        <div class="main-column">
            <h1 class="box-heading box-heading-main-col">Blog</h1>
            <div class="box-content">
                <!--記事一覧表示-->
                <?php if(have_posts()):?>
                <ul class="archive">
                    <?php while(have_posts()):?>
                    <?php the_post();?>
                    <li class="item-archive">
                        <div class="time-and-thumb-archive">
                            <!--投稿日　echo get_the_date()  -->
                            <time class="pub-date" dateitme="<?php echo get_the_date(DATE_W3C);?>"><?php echo get_the_date();?></time>
                            <?php if(has_post_thumbnail()):?>
                            <p class="thumb thumb-archive">
                                <!--個別ページへのリンク部分 the_permalink() -->
                                <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('easiestwp-thumbnail');?>
                                </a>
                            </p>
                            <?php endif;?>

                        </div>
                        <div class="data-archive">
                            <p class="list-categories-archive">
                                <!-- カテゴリー the_category() -->
                                <!-- the_category()関数は 初期設定では区切り文字が指定されていないため、第一引数にカンマと半角スペースを区切り文字として指定する-->
                                <?php the_category(', ');?>
                            </p>

                            <h2 class="title_archive">
                                <a href="<?php the_permalink();?>">
                                    <!--記事タイトル the_title() -->
                                    <?php the_title();?>
                                </a>
                            </h2>
                            <!-- タグ名 the_tags() -->
                            <!-- 初期設定で複数のタグがある場合でもカンマと半角スペースで区切って表示される -->
                            <p class="list-tags-archive">
                                <?php the_tags();?>
                            </p>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php else:?>
                <p>記事がありません。</p>
                <?php endif;?>
            </div>

            <nav class="pagination">
                <div class="nav-links">
                    <!--ページネーション送り用 配列 -->
                    <!-- 矢印の画像で表示させる -->
                    <?php
                    $prev_img = '<img class="arrow" src = "' 
                        . get_theme_file_uri() 
                        . '/images/arrow-left.png" "srcset="' 
                        . get_theme_file_uri() 
                        . '/images/arrow-left@2x.png 2x" alt="前へ">';
                    $next_img = '<img class="arrow" src = "' 
                        . get_theme_file_uri() 
                        . '/images/arrow-right.png" "srcset="' 
                        . get_theme_file_uri() 
                        . '/images/arrow-right@2x.png 2x" alt="前へ">';

                    $pagenation_array = array('prev_text'=>$prev_img,'next_text'=>$next_img);
                    
                    
                    //ページネーション the_posts_pagenation()
                    the_posts_pagination($pagenation_array);
                    ?>
                </div>
            </nav>

        </div>

        <ul class="side-column">
            <li class="widget">
                <form class="searchform">
                    <div>
                        <input type="text">
                        <input value="検索" type="submit">
                    </div>
                </form>
            </li>
            <li class="widget">
                <h2 class="widgettitle">最近の投稿</h2>
                <ul>
                    <li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
                    <li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
                    <li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
                    <li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
                    <li><a href="single.html">記事タイトル記事タイトル記事タイトル記事タイトル</a></li>
                </ul>
            </li>
            <li class="widget">
                <h2 class="widgettitle">カテゴリー</h2>
                <ul>
                    <li><a href="archive.html">カテゴリ名</a></li>
                    <li><a href="archive.html">カテゴリ名</a></li>
                    <li><a href="archive.html">カテゴリ名</a></li>
                </ul>
            </li>
        </ul>

    </div>

    <footer class="page-footer">
        <div class="footer-widget-area">
            <ul class="footer-widgets">
                <li><a href="#"><img src="http://placehold.it/320x80"></a></li>
                <li><a href="#"><img src="http://placehold.it/320x80"></a></li>
                <li><a href="#"><img src="http://placehold.it/320x80"></a></li>
            </ul>
            <div class="back-to-top">
                <a href="#"><img src="images/arrow-up.png" srcset="images/arrow-up@2x.png 2x" alt="">TOP</a>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © Gijutsu-Hyohron Co., Ltd.</p>
        </div>
    </footer>

    <!--wp_footer()をbodyタグの直前に追記-->
    <?php wp_footer()?>
</body>

</html>
