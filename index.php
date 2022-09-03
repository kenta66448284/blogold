    <!-- header -->
    <?php get_header(); ?>
    <main>
        <section>
            <div class="inner">
                <article>
                    <div class="slider">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/omura.jpg')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/meriro.jpg')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/cdcase.jpg')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/biriya-do.png')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/keytalk.png')); ?>">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/gatya.png')); ?>">
                    </div>
                </article>
                <img src="<?php echo esc_url(get_theme_file_uri('./images/contentsvg.png')); ?>" class="contents">
            </div>
        </section>
        <section class="naiyou">
            <h2 class="archive-title"><?php the_archive_title(); ?></h2>
            <div class="inner">
                <?php if (have_posts()): //もし1件以上記事があったら ?>
                <?php while (have_posts()): //記事がある間は繰り返す
                the_post(); //次の記事のデータをセットする?>
                <!--1記事め開始-->
                <article id="post-<?php the_ID(); ?>" <?php post_class("entry"); ?>class="entry">
                    <a href="<?php the_permalink(); ?>"><div class="article-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                        <?php if(has_post_thumbnail()): ?>　 <!-- もしアイキャッチ画像があるのであれば、 -->
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/toumeikun.png'));?>">
                        <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                    <?php endif; ?>
                    </div>
                        </a>
                    <h3><div class="tititle"><a href="<?php the_permalink(); ?>"><?php //制限文字以上の時省略記号をつける
                    if(mb_strlen($post->post_title)>30) {
                    $title= mb_substr($post->post_title,0,30);
                    echo $title . '...';
                    } else {
                    echo $post->post_title;
                    }
                    ?></a></div></h3>
                    <?php the_excerpt(); ?>
                    <div class="more">
                    <a href="<?php the_permalink(); ?>">and more→</a>
                </div>
                </article>
                <!-- end entry -->
                <!--1記事め終了-->
                <?php endwhile; //ループ終了?>
                <?php else: //もし、表示すべき記事がなかったら ?>
                <p>まだ記事はありません。</p>
                <?php endif; //条件分岐終了 ?>
            </div>
            <!--ページネーション開始-->
                <?php the_posts_pagination( array(
	                'mid_size' => 1,
	                'prev_text' => __( '<', 'textdomain' ),
	                'next_text' => __( '>', 'textdomain' ),
                ) ); ?>
                <!--ページネーション終了-->
                <!-- <nav>
                <ul>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav1.png')); ?>"></a></li>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav2.png')); ?>"></a></li>
                    <li><a href="#"><img src="<?php echo esc_url(get_theme_file_uri('./images/nav3.png')); ?>"></a></li>
                </ul>
            </nav> -->

        </section>
    </main>
    <!-- footer -->
    <?php get_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- <script src="./js/java.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>