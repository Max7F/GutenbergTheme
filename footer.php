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
    </body>
</html>
