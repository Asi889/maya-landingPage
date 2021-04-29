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
    <?php get_template_part('parts/font-loader');
    ?>
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
    <div id="app">
        <div class="sitcky-footer">
            <header>
                <!-- <nav class="nav_bar w-full h-24 bg-red-300 flex "> -->
                <nav class="w-full p-8 h-24 bg-red-300 flex justify-evenly ">

                    <!-- <div class="topbar_right_icon  p-3"> -->
                    <div class="topbar_right_icon ">
                        <?php
                        $imgae_id = carbon_get_the_post_meta($prefix . 'image');
                        echo wp_get_attachment_image($imgae_id);
                        ?>
                    </div>

                    <div class="topBarMiddle  justify-between">
                        <?php
                            $header_links =[
                                ['href'=>'#', 'text'=>' ראשי'],
                                ['href'=>'#', 'text'=>' מה במוצר'],
                                ['href'=>'#', 'text'=>' מרכזי ייעוץ'],
                                ['href'=>'#', 'text'=>' מעסיקים'],
                                ['href'=>'#', 'text'=>' יצירת קשר'],
                                ['href'=>'#', 'text'=>' תמונה'],
                            ];
                            foreach ($header_links as $key => $value) {
                                # code...
                                echo '<a class="px-4" href="'.$value['href'].'" >'.$value['text'].'</a>';
                            }
                        ?>
                        <!-- <button class="bbtn">ראשי</button>
                        <button>מה במוצר</button>
                        <button>מרכזי ייעוץ</button>
                        <button>צעסיקים</button>
                        <button>יצירת קשר</button>
                        <button>תמונה</button> -->

                    </div>

                    <div class="topbar_left_section">
                    <?php
                            $header_links =[
                                ['href'=>'#', 'text'=>' הרשמה'],
                                ['href'=>'#', 'text'=>' התחברות'],
                               
                            ];
                            foreach ($header_links as $key => $value) {
                                # code...
                                echo '<a class="font-bold" href="'.$value['href'].'" >'.$value['text'].'</a>';
                            }
                        ?>

                    </div>

                </nav>

            </header>