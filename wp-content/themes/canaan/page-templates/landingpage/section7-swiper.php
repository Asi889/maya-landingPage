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
                echo '<a target="_blank" rel="noopener noreferrer" class=" topBarFontSize-slidepop-top lp_header_middle text-center  block px-2 py-2 navlinks closeNav-js"   href="' . $value['href'] . '" > ';
                echo get_img_html($value['image']);
                echo '</a>';
                echo '</div>';
            }


        ?>
       

    </div>

</div>