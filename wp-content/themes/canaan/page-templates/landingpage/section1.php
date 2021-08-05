<?php



?>

<div class="section1-container pt-2 pb-16">

    <!-- <div class="lp_section1_bigball"></div> -->

    <div class="hp-header-right">


        <h1 class="font-bold landingPageTitle">
            <?php echo get_the_title(); ?>

        </h1>

        <div class="text-2xl">
            <?php
            $sub_title = carbon_get_the_post_meta('page-homesub_title');
            echo '<h2 class="lp_firstPage_subtitle">' . $sub_title . '</h2>';
            // $lp_firstPageSubtitle = [
            //     ['href' => '#', 'text' => ' מאיה, היועצת שתעזור לך לבחור נכון'],
            // ];
            // foreach ($lp_firstPageSubtitle as $key => $value) {
            //     # code...
            //     echo '<h2 class="lp_firstPage_subtitle" href="' . $value['href'] . '" >' . $value['text'] . '</h2>';
            // }
            ?>
        </div>

        <div class="landingPage-sm-Divider"></div>

        <div class="w-80 lp_firstPageText_1_container">
            <?php
            $first_text = carbon_get_the_post_meta('page-homesection1_first_text');
                echo '<p class="lp_firstPageText_1" >' . $first_text. '</p>';
            // $lp_firstPageText = [
            //     ['href' => '#', 'text' => ' בחירות הקשורות לקריירה הן בין ההחלטות החשובות ביותר שאנחנו מקבלים במהלך החיים. מה כדאי לי ללמוד? מה המקצוע הכי רווחי? איזו עבודה מתאימה לי? שאלות אלו ואחרות עולות בנו בתוך תהליך בחירת לימודים או מקצוע, וכובד ההחלטה הוא גדול.'],
            // ];
            // foreach ($lp_firstPageText as $key => $value) {
            //     # code...
            //     echo '<p class="lp_firstPageText_1" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            // }
            ?>
        </div>
        <br>

        <div class="w-80 lp_section1_second_text">
            <?php
            $second_text = carbon_get_the_post_meta('page-homesection1_second_text');
            echo '<p class="lp_firstPageText_1" >' . $second_text. '</p>';
            // $lp_firstPageText = [
            //     ['href' => '#', 'text' => 'בואו נצא למסע משותף, הקליקו על בואו נתחיל ומאיה, היועצת הדיגיטלית שלכם, תלווה אתכם בקבלת ההחלטות הגדולות של הקריירה'],
            // ];
            // foreach ($lp_firstPageText as $key => $value) {
            //     # code...
            //     echo '<p class="lp_firstPageText_1" href="' . $value['href'] . '" >' . $value['text'] . '</p>';
            // }
            ?>
        </div>

        <br>

        <div class="text-mainWhite bg-mainOrange btn_sec1">

            <?php
            $lp_firstPage_button = [
                ['href' => '#', 'text' => ' בוא נתחיל'],
            ];
            foreach ($lp_firstPage_button as $key => $value) {
                # code...
                echo '<a class="text-mainWhite bg-mainOrange btn_sec1" href="' . $value['href'] . '" >' . $value['text'] . '</a>';
            }
            ?>

        </div>

    </div>

    <div class="lp_section1_left">
        <!-- <?php
            $first_image = carbon_get_the_post_meta('page-homefirst_image');
            print_r($first_image);
            ?>
            <br></br>
            <?php
            print_r($first_image[0]);
            echo '<img class="lp_sec2_img" src="'. $first_image .'">';
        ?> -->

        <div class="paralax">
            
            <img class="section1-pic layer" data-speed="-5" src="<?php echo get_template_directory_uri() . '/static/images/firstpagepic.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
        

                <!-- <script type="text/javascript">
                    document.addEventListener("mousemove", parallax)
                    function parallax(e){
                    querySelectorAll('.layer').foreach((layer) => {
                        const speed = layer.getAttribute('data-speed')
                        const x = (window.innerWidth - e.pageX*spped)/100
                        const y = (window.innerHeight - e.pageY*spped)/100
                        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
                    })
                } 
                </script> -->

             
        </div>

    </div>

</div>


<div class="items">
  <div class="items__inner" id="js-scene">
    <div class="items__layer layer" data-depth="0.85">
        <div class="items__item" data-title="no.1"></div>
    </div>


    <div class="items__layer layer" data-depth="0.70"><div class="items__item" data-title="no.2"></div></div>
    <div class="items__layer layer" data-depth="0.65"><div class="items__item" data-title="no.3"></div></div>
    <div class="items__layer layer" data-depth="1.20"><div class="items__item" data-title="no.4"></div></div>
    <div class="items__layer layer" data-depth="0.00"><div class="items__item" data-title="no.5"></div></div>
  </div>
</div>