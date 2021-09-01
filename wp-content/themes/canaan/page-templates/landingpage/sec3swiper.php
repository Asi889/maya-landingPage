<?php
$lp_firstPageSubtitle = [
    ['href' => '#', 'text' => ' מה במוצר?'],
];
foreach ($lp_firstPageSubtitle as $key => $value) {
    # code...
    echo '<h1 class="font-bold pr-7 section3_right_title" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
}
?>
<div class="swiper-container">
    <div class="swiper  sec3swiper">

        <div class="swiper-wrapper">

            <?php
            $section3_slider_title = carbon_get_the_post_meta('page-homesection3_slider');
            foreach ($section3_slider_title as $key => $value) {
                echo '<div class="swiper-slide set-right">';
                echo '<h1 class="font-bold text-center section3_blue_title" >' . $value['title'] . '</h1>';
                echo '<p class="text-landingpage_section3sm_text text-landingpage_section3darkgrey section3-text text-right pr-1 max-w-screen-sm">' . $value['text'] . '</p>';
                echo '</div>';
            }
            ?>

        </div>
        <div class="swiper-pagination3 swiper-pagination"></div>
    </div>


</div>