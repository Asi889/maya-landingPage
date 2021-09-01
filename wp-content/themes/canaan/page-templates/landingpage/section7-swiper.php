<?php


global $first_slide_title;
$first_slide_title =  ['href' => '#', 'text' => 'אבחון תעסוקתי מקצועי'];
// $first_slide_text =  ['href' => '#', 'text' => 'בפלטפורמה היחידה שמשלבת אבחון מקצועית, ייעוץ תעבוקתי והשמה'];
// include('commonfunction.php');
?>


<div class="swiper-container sec7-swiper my-8 logo-swiper-container">
    <!-- Additional required wrapper -->

    <div class="swiper-wrapper">

        <?php
            $images = carbon_get_the_post_meta('page-homesection7_logos');
            foreach ($images as $key => $value) {
         
                # code...
                echo '<div class="swiper-slide ssswiper">';
                echo get_img_html($value['image']);
                echo '</div>';
            }


        ?>
        <!-- Slides -->
        <!-- <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/thor.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo" src="<?php echo get_template_directory_uri() . '/static/images/wolvereen.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/wonderwomen.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/superman.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/hulk.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/spider-man.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide">
            <img class="logoo " src="<?php echo get_template_directory_uri() . '/static/images/ironman.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div> -->

    </div>

</div>