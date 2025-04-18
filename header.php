<!doctype html>
<html lang="en">
<head>
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--=== LINK TAGS ===-->
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--<title><?php //wp_title('', true); ?></title>-->
    <!--=== WP_HEAD() ===-->
    <link rel="preload" href="<?php echo get_field('flexible_content')['0']['background_image']['url']; ?>" as="image">
    <!-- <link rel="preload" href="/wp-content/uploads/2021/10/Andrew-Pelletier.svg" as="image"> -->
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <?php wp_head(); ?>
</head>
<?php
//$query = get_field('flexible_content');
//echo '<pre>',print_r($query,1),'</pre>';
//?>

<body <?php body_class(); ?>>
<?php include( 'template-parts/css-parts/header-css.php' ); ?>
<?php include( 'template-parts/css-parts/general-css.php' ); ?>
<header>
    <div class="fixing">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <?php $images = get_field('logo', 'option') ?>
                    <img src="<?php echo $images['url']?>" alt="<?php echo $images['alt']?>" class="site_logo"/>
                </a>
            </div>
            <div class="wrap-nav">
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<div><ul>%3$s</ul>',
                    )); ?>
                </nav>
            </div>
            <div class="mobileMenu">
                <div class="iconAnime">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div><!--End container-fluid-->
    </div><!--End fixing-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</header>
