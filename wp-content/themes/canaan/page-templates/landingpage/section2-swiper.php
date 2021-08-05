<?php


?>


<div class="swiper-container w-80  section3-swiper">
    <!-- Additional required wrapper -->

    <!-- <?php
    $lp_firstPageSubtitle = [
        ['href' => '#', 'text' => ' מה במוצר?'],
    ];
    foreach ($lp_firstPageSubtitle as $key => $value) {
        # code...
        echo '<h1 class="font-bold px-4 section3_right_title" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
    }
    ?> -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide section2-swiper-slide  lp-section2-button">
            <img class="" src="<?php echo get_template_directory_uri() . '/static/images/whiteeye.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>

        <div class="swiper-slide section2-swiper-slide  lp-section2-button">
        <img class="white-eye" src="<?php echo get_template_directory_uri() . '/static/images/whitehat.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <div class="swiper-slide section2-swiper-slide  lp-section2-button">
        <img class="white-eye" src="<?php echo get_template_directory_uri() . '/static/images/whitecard.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-next"></div>

    <!-- If we need navigation buttons -->

</div>