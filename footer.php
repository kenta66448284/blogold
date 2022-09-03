<footer>
        <div class="pcfooter">
            <div class="inner">
                <div class="profile">
                    <p>PROFILE</p>
                    <div class="profile1">
                        <img src="<?php echo esc_url(get_theme_file_uri('./images/profilefoto.png')); ?>">
                        <div class="group">
                            <div class="profile2">
                                <p>名前</p>
                                <p>kenta</p>
                            </div>
                            <div class="profile2">
                                <p>趣味</p>
                                <p>音楽鑑賞 ライブ参戦 <br>料理 運動など、</p>
                            </div>
                        </div>
                    </div>
                    <p class="tyanto">ちゃんと専門学生してます。</p>
                    <div class="naiyou">
                <nav>
                    <ul>
                        <li><a href="https://twitter.com/kenta_tnpr"><img src="<?php echo esc_url(get_theme_file_uri('./images/Twitter social icons2.png')); ?>"></a></li>
                        <li><a href="https://www.instagram.com/"><img src="<?php echo esc_url(get_theme_file_uri('./images/Instagram_icon.png')); ?>"></a>
                        </li>
                    </ul>
                </nav>
            </div>
                </div>
            </div>
            <div class="inner">
                <div class="category">
                    <div class="footercategory">
                        <!-- フッターウィジェット（footer-widget）の追加 -->
                        <?php if ( is_active_sidebar('footer-widget') ) : ?>
                        <?php dynamic_sidebar('footer-widget'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner">
            <small>©2021_masuda</small>
        </div>
    </footer>