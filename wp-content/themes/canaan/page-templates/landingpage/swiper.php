<?php


global $first_slide_title;
$first_slide_title =  ['href' => '#', 'text' => 'אבחון תעסוקתי מקצועי'];
// $first_slide_text =  ['href' => '#', 'text' => 'בפלטפורמה היחידה שמשלבת אבחון מקצועית, ייעוץ תעבוקתי והשמה'];
// include('commonfunction.php');
?>

<!-- <?php
        $lp_firstPageSubtitle = [
            ['href' => '#', 'text' => ' מה במוצר?'],
        ];
        // foreach ($lp_firstPageSubtitle as $key => $value) {
        //     # code...
        //     echo '<h1 class="font-bold px-4 landPageTopBarSignUp" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
        // }
        ?> -->
    <div class="swiper-container section3-swiper">
        <!-- Additional required wrapper -->
        
        <?php
    $lp_firstPageSubtitle = [
        ['href' => '#', 'text' => ' מה במוצר?'],
    ];
    foreach ($lp_firstPageSubtitle as $key => $value) {
        # code...
        echo '<h1 class="font-bold px-4 section3_right_title" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
    }
    ?>
    <div class="section3-next-container">
        </div>
    <div class="swiper-button-prev swiper-button-prev-section3"></div>
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="inline-block sec3-inner-swiper mx-auto">
                <!-- <div class="mx-auto"> -->
                    <?php
                    $lp_firstPageSubtitle = [
                        ['href' => '#', 'text' => 'משרות שמתאימות לכם'],
                    ];
                    foreach ($lp_firstPageSubtitle as $key => $value) {
                        # code...
                        echo '<h1 class="font-bold text-center section3_blue_title" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
                    }
                    ?>

                    <?php
                    $first_slide_text = [
                        ['href' => '#', 'text' => 'מאגר משרות שמתעדכן כל הזמן- היישר מהמעסיק'],
                    ];
                    foreach ($first_slide_text as $key => $value) {
                        # code...
                        echo '<p class="text-landingpage_section3sm_text text-center text-landingpage_section3darkgrey section3-text" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
                    }
                    ?>
                <!-- </div> -->
            </div>
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <div class="swiper-button-next swiper-button-next-section3"></div>

    <!-- If we need navigation buttons -->

</div>