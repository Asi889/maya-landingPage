<?php
defined('ABSPATH') || die();

/**
 * Template Name: Home Page - עמוד הבית 
 * Description: עמוד הבית
 *
 */



global $post;
$prefix = 'page-home';
$mainObj = new canaan_post($post);


get_header();
?>
<main>

    <div name="section-1" id="section-1" class="section-1 overflow-hidden sections nave-link-js">
        <!-- <?php get_header();  ?> -->
        <?php include_once(dirname(__FILE__) . '/landingpage/section1.php'); ?>

    </div>

    <div class="section_2">
        <div class="section2-media-smallball"></div>
        <div class="section2-media-bigball"></div>
        <div class="section2-grid-small-screen">
            <?php
            include_once(dirname(__FILE__) . '/landingpage/section2.php');
            ?>
        </div>

        <div class="section2-swiper-small-screen">

            <?php
            include_once(dirname(__FILE__) . '/landingpage/section2-swiper.php');
            ?>
        </div>

    </div>

    <div id="section-2" class="section3bg-topBarColor sections">

        <?php
        include_once(dirname(__FILE__) . '/landingpage/section3.php');
        ?>

    </div>

    <!-- <div id="section-4"> -->

    <?php
    //  include_once(dirname(__FILE__) . '/landingpage/section4.php');
    ?>

    <!-- </div> -->

    <!-- <div id="section-5" class="section_2 "> -->

    <?php
    //  include_once(dirname(__FILE__) . '/landingpage/section5.php'); 
    ?>

    <!-- </div> -->

    <div class="h-section6_height">

        <?php include_once(dirname(__FILE__) . '/landingpage/section6.php'); ?>

    </div>


    <div   class="section7">

        <?php include_once(dirname(__FILE__) . '/landingpage/section-7.php'); ?>

    </div>

    
    <div id="section-3" class="sections">

        <?php include_once(dirname(__FILE__) . '/landingpage/section8.php'); ?>
    </div>



</main>



<?php

get_footer();
