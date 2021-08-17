<?php


?>

<div class="section2_title pt-20 ">
    <?php
    $lp_firstPage_button = [
        ['href' => '#', 'text' => 'למי זה מתאים?'],
    ];
    foreach ($lp_firstPage_button as $key => $value) {
        # code...
        echo '<h1 class="lp-section2-title mx-auto mb-24" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
    }
    ?>
</div>

<div class="section2_body section2_body_width ">


    <div class="lp-section2-button white-eye-wrapper relative">
        <img class="white-eye" src="<?php echo get_template_directory_uri() . '/static/images/whiteeye.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-eye" src="<?php echo get_template_directory_uri() . '/static/images/greeneye.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>מחפשי עבודה</p>     
    </div>
    <div class="lp-section2-button hat-wrapper relative">
        <img class="lp_sec2_img white-hat" src="<?php echo get_template_directory_uri() . '/static/images/whitehat.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-hat" src="<?php echo get_template_directory_uri() . '/static/images/greenhat.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>אקדמאיים</p>     
    </div>
    <div class="lp-section2-button card-wrapper relative">
        <img class="lp_sec2_img white-card" src="<?php echo get_template_directory_uri() . '/static/images/whitecard.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-card" src="<?php echo get_template_directory_uri() . '/static/images/greencard.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>חיילים משוחררים</p>     
    </div>
    <div class="lp-section2-button relative clock-wrapper">
        <img class="lp_sec2_img white-clock" src="<?php echo get_template_directory_uri() . '/static/images/whiteclock.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-clock" src="<?php echo get_template_directory_uri() . '/static/images/greenclock.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>מפוטרים</p>     
    </div>
    <div class="lp-section2-button settings-wrapper relative">
        <img class="lp_sec2_img white-settings" src="<?php echo get_template_directory_uri() . '/static/images/whitesettings.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-settings" src="<?php echo get_template_directory_uri() . '/static/images/greensettings.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>Reskilling</p>     
    </div>
    <div class="lp-section2-button relative person-wrapper">
        <img class="lp_sec2_img white-person" src="<?php echo get_template_directory_uri() . '/static/images/whiteperson.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <img class="lp_sec2_img green-person" src="<?php echo get_template_directory_uri() . '/static/images/greenperson.svg'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        <p>Upskilling</p>     
    </div>
    


</div>
