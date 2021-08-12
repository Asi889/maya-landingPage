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
        
        function navbarfunction() {
            var x = document.getElementById("smalllinks");
            if (x.className === "small_hd_navlinks") {
                x.className = "ssm";
            } else {
                x.className = "small_hd_navlinks";
            }
            // var x = document.getElementById("smalllinks");
            // if (x.className === "topnav") {
            //     x.className += " responsive";
            // } else {
            //     x.className = "topnav";
            // }
        }
        </script>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="generator" content="Naaman Frenkel using WordPress">
<title><?php wp_title('|', true, 'right'); ?></title>

<script src="jquery-3.5.1.min.js"></script>
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="app">
        <div class="sitcky-footer">
            <header>
                <nav class="topnav" id="myTopnav">

                        <a href="javascript:void(0);" style="font-size: 35px;" class="icon col-start-6" onclick="navbarfunction()">&#9776;</a>
                    
                    <div class="topbar_right_icon ">
                        <img class="lp_header_img" src="<?php echo get_template_directory_uri() . '/static/images/logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                        
                    </div>
                    <!-- <div class="topBarMiddle justify-between my-auto"> -->
                        <?php

                        // $links = carbon_get_page_meta('page-homenavlinks');
                        $links = carbon_get_the_post_meta('page-homenavlinks');
                        
                        foreach ($links as $value) {
                            # code...
                            echo '<a class="px-4 topBarFontSize lp_header_middle text-left hd_navlinks"   href="#' . $value['href'] . '" >' . $value['title'] . '</a>';
                        }
                        ?>

                        <div class="small_hd_navlinks" id="smalllinks">
                            <?php
                        foreach ($links as $value) {
                            # code...
                            echo '<a class="px-4 topBarFontSize lp_header_middle text-left"   href="#' . $value['href'] . '" >' . $value['title'] . '</a>';
                        
                        }
                        
                        ?>
                        </div>


                    <!-- </div> -->

                    <div class="topbar_left_section my-auto">
                        <?php
                        // $header_links = carbon_get_the_post_meta('page-homeheader_signup');
                        // $header_links = carbon_get_the_post_meta('page-homeheader_register');
                        $header_links = canaan_get_menu_array('primary');
                
                        // // ];
                        foreach ($header_links as $key => $value) {
                            # code...
                            echo '<a class="font-bold px-4 landPageTopBarSignUp main_links lp_header_leftsec" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
                        }
                        ?>

                    </div>

                </nav>

            </header>