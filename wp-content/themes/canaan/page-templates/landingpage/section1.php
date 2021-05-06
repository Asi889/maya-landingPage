<?php



?>
<div class="flex pt-2 pb-16">
    <div class="hp-header-right">


        <h1 class="font-bold landingPageTitle">
            <?php echo get_the_title(); ?>

        </h1>

        <div class="text-2xl">
            <?php
            $lp_firstPageSubtitle = [
                ['href' => '#', 'text' => ' מאיה, היועצת שתעזור לך לבחור נכון'],
            ];
            foreach ($lp_firstPageSubtitle as $key => $value) {
                # code...
                echo '<h2 class="lp_firstPage_subtitle" href="' . $value['href'] . '" >' . $value['text'] . '</h2>';
            }
            ?>
        </div>

        <div class="landingPage-sm-Divider"></div>

        <div class="w-80">
            <?php
            $lp_firstPageText = [
                ['href' => '#', 'text' => ' בחירות הקשורות לקריירה הן בין ההחלטות החשובות ביותר שאנחנו מקבלים במהלך החיים. מה כדאי לי ללמוד? מה המקצוע הכי רווחי? איזו עבודה מתאימה לי? שאלות אלו ואחרות עולות בנו בתוך תהליך בחירת לימודים או מקצוע, וכובד ההחלטה הוא גדול.'],
            ];
            foreach ($lp_firstPageText as $key => $value) {
                # code...
                echo '<p class="lp_firstPageText_1" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            }
            ?>
        </div>
        <br>

        <div class="w-80">
            <?php
            $lp_firstPageText = [
                ['href' => '#', 'text' => 'בואו נצא למסע משותף, הקליקו על בואו נתחיל ומאיה, היועצת הדיגיטלית שלכם, תלווה אתכם בקבלת ההחלטות הגדולות של הקריירה'],
            ];
            foreach ($lp_firstPageText as $key => $value) {
                # code...
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
                # code...
                echo '<a class="text-mainWhite bg-mainOrange btn" href="' . $value['href'] . '" >' . $value['text'] . '</a>';
            }
            ?>

        </div>

    </div>

    <div class="">

        <img src="<?php echo get_template_directory_uri() . '/static/images/firstpagepic.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">

    </div>
</div>