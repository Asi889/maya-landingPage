<?php

?>
<div class="lp_sec5_textwidth  mx-auto flex-col justify-evenly ">
    <div class="section2_title pt-10 ">
        <?php
        $lp_firstPage_button = [
            ['href' => '#', 'text' => 'מעסיקים?'],
        ];
        foreach ($lp_firstPage_button as $value) {
            # code...
            echo '<h1 class="lp-section2-title mx-auto my-24">' . $value['text'] . '</h1>';
        }
        ?>
    </div>

    <div class=" mx-auto text-center ">
        <?php
        $lp_firstPage_button = [
            ['href' => '#', 'text' => 'הצטרפו למאיה ומצאו את העובדים  האידיאלים לארגון שלכם. מאיה מאפשרת לכם לחסוך בזמן בסינון קורות חיים וראיון מועמדים שונים לתפקידי מפתח'],
        ];
        foreach ($lp_firstPage_button as  $value) {
            # code...
            echo '<p class="lp_sec5_text ">' . $value['text'] . '</p>';
        }
        ?>

    </div>

    <div class="lp_sec5_tags mt-20">

        <?php
        //  carbon_get_the_post_meta( 'page-homevenue' )

        $benefits = carbon_get_the_post_meta('page-homebenefits');
        // print_r($benefits);
        // die();
        foreach ($benefits as $key => $value) {


            # code...
            echo
            '<div class="justify-self-center flex mt-12 "  >
            <div class="lp_sec5_whiteball">' . ($key + 1) . '</div>
            <p class="lp_sec5_text">' . $value['title'] . '</p>
         </div>';
        }
        ?>


    </div>
    <div class="text-mainWhite mx-auto mt-16 mb-10 bg-mainOrange btn ">

        <?php
        $lp_firstPage_button = [
            ['href' => '#', 'text' => 'הרשמה'],
        ];
        foreach ($lp_firstPage_button as $key => $value) {
            # code...
            echo '<a class="text-mainWhite bg-mainOrange btn " href="' . $value['href'] . '" >' . $value['text'] . '</a>';
        }
        ?>

    </div>
</div>