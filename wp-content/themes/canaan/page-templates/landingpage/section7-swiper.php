<?php


global $first_slide_title;
$first_slide_title =  ['href' => '#', 'text' => 'אבחון תעסוקתי מקצועי'];
// $first_slide_text =  ['href' => '#', 'text' => 'בפלטפורמה היחידה שמשלבת אבחון מקצועית, ייעוץ תעבוקתי והשמה'];
// include('commonfunction.php');
?>


<div class="swiper-container sec7-swiper logo-swiper-container">
    <!-- Additional required wrapper -->

    <div class="swiper-button-prev"></div>
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <?php
            $lp_firstPageSubtitle = [
                ['href' => '#', 'text' => ' מאיה, היועצת שתעזור לך לבחור נכון'],
            ];
            foreach ($lp_firstPageSubtitle as $key => $value) {
                # code...
                echo '<h1 class="font-bold landingPageTitle" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
            }
            ?>

            <?php
            $first_slide_text = [
                ['href' => '#', 'text' => 'בפלטפורמה היחידה שמשלבת אבחון מקצועית, ייעוץ<br> תעבוקתי והשמה'],
            ];
            foreach ($first_slide_text as $key => $value) {
                # code...
                echo '<p class="text-landingpage_section3sm_text text-landingpage_section3darkgrey" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            }
            ?>

        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-next"></div>

    <!-- If we need navigation buttons -->

</div>