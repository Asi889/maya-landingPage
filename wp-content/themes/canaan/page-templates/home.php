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
<main >
<!-- <main class="col-1-1"> -->


    <div id="section-1" class="section-1">
        <!-- <?php get_header();  ?> -->
        <?php include_once(dirname(__FILE__) . '/landingpage/section1.php'); ?>

    </div>

    <div class="section_2 mb-16">

        <?php
        //  include_once(dirname(__FILE__) . '/landingpage/section2.php'); 
         ?>

        <?php 
        include_once(dirname(__FILE__) . '/landingpage/section2-swiper.php'); 
        ?>

    </div>

    <div id="section-3" class="section3  bg-topBarColor">

        <?php include_once(dirname(__FILE__) . '/landingpage/section3.php'); ?>

    </div>

    <!-- <div id="section-4"> -->

        <!-- <?php include_once(dirname(__FILE__) . '/landingpage/section4.php'); ?> -->

    <!-- </div> -->

    <!-- <div id="section-5" class="section_2 "> -->

        <!-- <?php include_once(dirname(__FILE__) . '/landingpage/section5.php'); ?> -->

    <!-- </div> -->

    <div id="section-6" class="h-section6_height ">

        <?php include_once(dirname(__FILE__) . '/landingpage/section6.php'); ?>

    </div>


    <div id="section-7" class=" h-section6_height ">

        <?php include_once(dirname(__FILE__) . '/landingpage/section-7.php'); ?>

    </div>

    <!-- <div id="section-8" class=" bg-mainOrange w-bbc" > -->

    <?php include_once(dirname(__FILE__) . '/landingpage/section8.php'); ?>

    <!-- </div> -->



</main>



<?php

get_footer();
