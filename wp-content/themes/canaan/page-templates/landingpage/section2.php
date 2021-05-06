<?php


?>

<div class="section2_title pt-10 ">
    <?php
    $lp_firstPage_button = [
        ['href' => '#', 'text' => 'למי זה מתאים?'],
    ];
    foreach ($lp_firstPage_button as $key => $value) {
        # code...
        echo '<h1 class="lp-section2-title mx-auto my-24" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
    }
    ?>
</div>

<div class="section2_body section2_body_width ">
    <!-- <div class="section_2_b"> -->
        <?php
        $lp_firstPage_button = [
            ['href' => '#', 'text' => 'מחפשי עבודה'],
            ['href' => '#', 'text' => 'אקדמאיים'],
            ['href' => '#', 'text' => 'חיילים משוחררים'],
            ['href' => '#', 'text' => 'מפוטרים'],
            ['href' => '#', 'text' => 'Reskilling'],
            ['href' => '#', 'text' => 'Upskilling'],
        ];
        foreach ($lp_firstPage_button as $key => $value) {
            # code...

            echo '<div class="lp-section2-button" href="' . $value['href'] . '" >';

            echo  '<img class="lp_sec2_img" src="' . get_template_directory_uri() . '/static/images/magifingglass.png">';
            // '<div>תמונה</div>'

            echo '<p>' . $value['text'] . '</p>';

            echo   '</div>';
        }
        ?>
    <!-- </div> -->
</div>