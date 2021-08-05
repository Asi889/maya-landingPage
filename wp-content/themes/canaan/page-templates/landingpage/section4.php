<!-- <?php

?>

<div class="bg-lp_section4 section4_container mb-3 ">

    <div class="section4-right ">

        <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/static/images/lp_sec4_pic_right.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">

    </div>

    <div class="section4-left">
        <div class="">

            <?php
            $lp_firstPageSubtitle = [
                ['href' => '#', 'text' => ' מחזירים את הצעירים לעולם התעסוקה'],
            ];
            foreach ($lp_firstPageSubtitle as $key => $value) {
                echo '<h1 class="font-bold landingPageTitle text-lp_sec4_left_darkgrey" href="' . $value['href'] . '" >' . $value['text'] . '</h1>';
            }
            ?>
        </div>



        <div class="">
            <?php
            $lp_firstPageText = [
                ['href' => '#', 'text' => ' בחירות הקשורות לקריירה הן בין ההחלטות החשובות ביותר שאנחנו מקבלים במהלך החיים. מה כדאי לי ללמוד? מה המקצוע הכי רווחי? איזו עבודה מתאימה לי? שאלות אלו ואחרות עולות בנו בתוך תהליך בחירת לימודים או מקצוע, וכובד ההחלטה הוא גדול.'],
            ];
            foreach ($lp_firstPageText as $key => $value) {
                echo '<p class="lp_firstPageText_1" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            }
            ?>
        </div>
        <br>

        <div class="">
            <?php
            $lp_firstPageText = [
                ['href' => '#', 'text' => 'בואו נצא למסע משותף, הקליקו על בואו נתחיל ומאיה, היועצת הדיגיטלית שלכם, תלווה אתכם בקבלת ההחלטות הגדולות של הקריירה'],
            ];
            foreach ($lp_firstPageText as $key => $value) {
                echo '<p class="lp_firstPageText_1" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            }
            ?>
        </div>

        <br>

        <div class="text-mainWhite bg-mainOrange btn">

            <?php
            $lp_firstPage_button = [
                ['href' => '#', 'text' => ' בוא נתחיל'],
            ];
            foreach ($lp_firstPage_button as $key => $value) {
                echo '<a class="text-mainWhite bg-mainOrange btn" href="' . $value['href'] . '" >' . $value['text'] . '</a>';
            }
            ?>

        </div>

    </div>
</div> -->