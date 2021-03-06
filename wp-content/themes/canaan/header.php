<?php
if (!defined('ABSPATH')) {
    die();
};

global $post;
$prefix = 'page-home';
$mainObj = new canaan_post($post);


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php // get_template_part('parts/favicon'); 
    ?>
    <?php get_template_part('parts/ga-tracking'); ?>
    <?php get_template_part('parts/font-loader'); ?>

    <!-- //////////// favicon ///////////////// -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/static/images/favicon/napple-touch-icon.png'; ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/static/images/favicon/favicon-32x32.png'; ?> " />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/static/images/favicon/favicon-16x16.png'; ?>" />
    <link rel="manifest" href="<?php echo get_template_directory_uri() . '/static/images/favicon/site.webmanifest'; ?>" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <!-- //////////////////////////////////////////////////// -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-50437388-2"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-50437388-2');
    </script>

    <script>
        var __mainData = {
            nonce: '<?php echo wp_create_nonce('register_user'); ?>',
            isHP: <?php echo (is_front_page() ? 'true' : 'false'); ?>,
            homeUrl: '<?php echo home_url(); ?>',
            ajaxUrl: '<?php echo admin_url('admin-ajax.php'); ?>',
            isRtl: <?php echo is_rtl() ? 'true' : 'false' ?>,
            loadMore: false,
            postsPerPage: <?php echo get_option('posts_per_page'); ?>,
            offset: <?php echo get_option('posts_per_page'); ?>,
        }
    </script>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="Naaman Frenkel using WordPress">
    <title><?php wp_title('|', true, 'right'); ?></title>

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="myNav" class="overlay">
        <button class="closebtn close-slide-btn closeNav-js" id="close-slide-btn">&times;</button>
        <div class="overlay-content pt-14 overlay-content-js">
            <div class="slidepop-navlinks text-center">
                <?php

                $links = carbon_get_the_post_meta('page-homenavlinks');

                foreach ($links as $value) {
                    
                    echo '<a id="close-slide-btn" class="topBarFontSize-slidepop-top lp_header_middle text-center block px-2 py-2 navlinks closeNav-js"   href="#' . $value['href'] . '" >' . $value['title'] . '</a>';
                }
                ?>
            </div>
            <div class="slidepop-navlinks self-center text-center">

                <?php
                $header_links = canaan_get_menu_array('primary');
                foreach ($header_links as $key => $value) {
                    # code...
                    echo '<a class="font-bold landPageTopBarSignUp-slidepop px-2 py-2 block main_links lp_header_leftsec" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
                }
                ?>

            </div>
        </div>
    </div>
    <div id="app">
        <div class="sitcky-footer">
            <header class=" pb-24">
                <nav class="topnav" id="myTopnav">

                    <button style="font-size: 35px;" class="icon col-start-6 toglle-nav-js">&#9776;</button>

                    <!-- <div class="topbar_right_icon "> -->
                    <img class="lp_header_img" src="<?php echo get_template_directory_uri() . '/static/images/logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">

                    <!-- </div> -->




                    <div class="lp_nav_middle_links">
                        <!-- <?php
                                $links = carbon_get_the_post_meta('page-homenavlinks');
                                foreach ($links as $value) {
                                    # code...
                                    echo '<a class="px-4 topBarFontSize lp_header_middle text-left hd_navlinks"   href="#' . $value['href'] . '" >' . $value['title'] . '</a>';
                                }
                                ?> -->
                        <a id="firstlink" class="px-4 topBarFontSize lp_header_middle text-left hd_navlinks zzt scroll-header-links" href="#section-1">????????</a>
                        <a class="px-4 topBarFontSize lp_header_middle text-left hd_navlinks" href="#section-2">???? ??????????</a>
                        <a class="px-4 topBarFontSize llz lp_header_middle text-left hd_navlinks" href="#section-3">?????????? ??????</a>
                        <!-- <img class="wheelchair-logo" src="<?php echo get_template_directory_uri() . '/static/images/wheelchair.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>"> -->
                    </div>

                    <div class="topbar_left_section my-auto">
                        <?php

                        $header_links = canaan_get_menu_array('primary');


                        foreach ($header_links as $key => $value) {
                            # code...
                            echo '<a class="font-bold px-4 landPageTopBarSignUp main_links lp_header_leftsec" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
                        }
                        ?>
                        <a href=""></a>

                    </div>

                </nav>

            </header>