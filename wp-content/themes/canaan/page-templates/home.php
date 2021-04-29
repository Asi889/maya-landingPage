<?php
defined('ABSPATH') || die();

/**
 * Template Name: Home Page - עמוד הבית 
 * Description: עמוד הבית
 *
 */



global $post;
$prefix = 'page-home';
$mainObj = new canaan_post($post);





get_header();
?>
<main class="col-1-1">




    <div class="bbc flex justify-evenly">


        <div class="flex-col flex-1">

            <h1 class="text-4xl text-mainTurquoise">
                <?php echo get_the_title(); ?>

            </h1>

            <h2 class="text-2xl">
                מאיה, היועצת שתעזור לך לבחור נכון
            </h2>

            <div class="landingPageSmallDivider  w-24 h-4 m-6 bg-gray-300 "></div>

            <p class="w-80">
                בחירות הקשורות לקריירה הן בין ההחלטות החשובות ביותר שאנחנו מקבלים במהלך החיים. מה כדאי לי ללמוד? מה המקצוע הכי רווחי? איזו עבודה מתאימה לי? שאלות אלו ואחרות עולות בנו בתוך תהליך בחירת לימודים או מקצוע, וכובד ההחלטה הוא גדול.
            </p>
            <p class="w-80 mt-2">
            בואו נצא למסע משותף, הקליקו על בואו נתחיל ומאיה, היועצת הדיגיטלית שלכם, תלווה אתכם בקבלת ההחלטות הגדולות של הקריירה
            </p>

            <button class="text-mainWhite bg-mainOrange btn ">
            בוא נתחיל
            </button>

        </div>


        <div class="bigPic flex-1">

            <?php
            $imgae_id = carbon_get_the_post_meta($prefix . 'image');
            echo wp_get_attachment_image($imgae_id, 'full');
            ?>
            תמונה
        </div>

    </div>

</main>



<?php

get_footer();
