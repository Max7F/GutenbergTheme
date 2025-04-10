<?php include( 'template-parts/css-parts/footer-css.php' ); ?>
    <footer>
        <div class="top_content_footer">
            <div class="container">
                <div class="logo logo_footer">
                    <a href="/">
                        <?php $images = get_field('footer_logo', 'option') ?>
                        <img src="<?php echo $images['url']?>" alt="<?php echo $images['alt']?>" class="site_logo"/>
                    </a>
                </div>
                <div class="info_wrap">
                    <div class="info_title">
                        <?=get_field('info_title', 'option');?>
                    </div>
                    <div class="column_wrap">
                        <?php
                        $items = get_field('info_blocks', 'option');
                        if($items):
                            foreach($items as $item):
                                ?>
                                <div class="item">
                                    <?=$item['info_block_content']?>
                                </div>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_wrap_footer">

                <div class="menu_wrap_footer border_top_footer">
                    <div class="container">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer-menu',
                            'items_wrap' => '<ul>%3$s</ul>',
                        )); ?>
                    </div>
                </div>
                <div class="textarea_footer border_top_footer">
                    <div class="container"><?=get_field('big_description', 'option');?></div>
                </div>
                <div class="copyright_footer border_top_footer">
                    <div class="container">
                        <?=get_field('copyright_content', 'option');?>
                    </div>
                </div>

        </div>
    </footer>
<?php wp_footer(); ?>

    <!--Here Put Google Fonts Links-->
    <?php if (get_field('global_fonts', 'option') === 'original'): ?>
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">  -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php
        else:
            $gfont_url_new = [];
            for( $i = 1; $i <= 7; $i++ ){
                $gfont_url = '_gfonts_url_value_key_'.$i;
                $gfont_url_full = explode(':', get_option($gfont_url));
                if( !$gfont_url_full[1] ) $gfont_url_full[1] = '400';
                $gfont_url_new[$gfont_url_full[0]][$gfont_url_full[1]] = 1;
            }

            foreach( $gfont_url_new as $key => $gfont_url_sigle ){
                echo '<link href="https://fonts.googleapis.com/css?family='.$key.':'.implode(',', array_keys($gfont_url_sigle)).'&display=swap" rel="stylesheet">';
            }
        endif;
    ?>

    </body>
</html>
