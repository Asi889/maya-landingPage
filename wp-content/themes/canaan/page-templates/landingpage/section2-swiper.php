<?php


?>


<div class="swiper-container w-80   section2-swiper">
    <!-- <div class="section2-media-smallball"></div> -->
    
    <h1 class="section2-media-title ">למי זה מתאים?</h1>
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
    <div class="swiper-button-prev swiper-button-next-section2"></div>
    <div class="swiper-wrapper section2-swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide  swiper-slide-section2  ">
            <div class="lp-section2-button-swiper">
                <img class="section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whiteeye.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">מחפשי עבודה</P>
            </div>
        </div>

        <div class="swiper-slide  swiper-slide-section2">
            <div class="lp-section2-button-swiper">
                <img class="white-eye section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whitehat.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">אקדמאיים</P>
            </div>
        </div>

        <div class="swiper-slide  swiper-slide-section2">
            <div class="lp-section2-button-swiper">
                <img class="white-eye section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whitecard.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">חיילים משוחררים</P>
            </div>
        </div>

        <div class="swiper-slide  swiper-slide-section2">
            <div class="lp-section2-button-swiper">
                <img class="white-eye section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whiteclock.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">מפוטרים</P>
            </div>
        </div>

        <div class="swiper-slide  swiper-slide-section2">
            <div class="lp-section2-button-swiper">
                <img class="white-eye section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whitesettings.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">Reskilling</P>
            </div>
        </div>

        <div class="swiper-slide  swiper-slide-section2">
            <div class="lp-section2-button-swiper">
                <img class="white-eye section2-img" src="<?php echo get_template_directory_uri() . '/static/images/whiteperson.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                <P class="text-lg">Upskilling</P>
            </div>
        </div>
        
        
    </div>


    <div uniqueNavElements class="swiper-button-next swiper-button-next-section2"></div>

    <!-- If we need navigation buttons -->
</div>