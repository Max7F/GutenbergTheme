<section class="main-section">
    <div class="container">
        <h1><?php echo get_field('title'); ?></h1>    

        <div class="swiper">
            <div class="swiper-wrapper">            
                <?php
                    $items = get_field('slider');
                    if($items):
                        foreach($items as $item):
                    ?>
                            <div class="swiper-slide">
                                <img src=" <?=$item['image']?> " alt="">
                            </div>
                        <?php
                        endforeach;
                    endif;
                ?>    	
            </div>
        </div>

        <article class="section-content">
            <?php echo get_field('text'); ?>
        </article>
    </div>

</section>  