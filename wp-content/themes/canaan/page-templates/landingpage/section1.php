<?php



?>


<div class="section1-container pt-2 pb-16">


    <div class="hp-header-right">


        <h1 class="font-bold landingPageTitle">
            <?php echo get_the_title(); ?>

        </h1>

        <div class="text-2xl">
            <?php
            $sub_title = carbon_get_the_post_meta('page-homesub_title');
            echo '<h2 class="lp_firstPage_subtitle">' . $sub_title . '</h2>';

            ?>
        </div>

        <div class="landingPage-sm-Divider"></div>

        <div class="w-80 lp_firstPageText_1_container">
            <?php
            $first_text = carbon_get_the_post_meta('page-homesection1_first_text');
            echo '<p class="lp_firstPageText_1" >' . $first_text . '</p>';

            ?>
        </div>
        <br>

        <div class="w-80 lp_section1_second_text">
            <?php
            $second_text = carbon_get_the_post_meta('page-homesection1_second_text');
            echo '<p class="lp_firstPageText_1" >' . $second_text . '</p>';

            ?>
        </div>

        <br>

        <div class="text-mainWhite bg-mainOrange btn_sec1">

            <?php
            $lp_firstPage_button = [
                ['href' => 'https://am-maya.com/user/signup', 'text' => 'להרשמה'],
            ];
            foreach ($lp_firstPage_button as $key => $value) {
                # code...
                echo '<a class="text-mainWhite" href="' . $value['href'] . '" >' . $value['text'] . '</a>';
            }
            ?>

        </div>

    </div>

    <div class="lp_section1_left ">

        <!-- <div>

        </div>
        <img class="" src="<?php echo get_template_directory_uri() . '/static/images/pic1.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">

        <img class="absolute top-24 -right-2 pic-2" src="<?php echo get_template_directory_uri() . '/static/images/pic2.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">

        <img class="absolute top-44 pic-3" src="<?php echo get_template_directory_uri() . '/static/images/pic3.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>"> -->
        <!-- <div class="" >
                </div>
                <div class= >
                </div> -->
        <div class="parallax">
            <div class="parallax-layer parallax-layer__1" data-parallax-disallow="y" data-parallax-deep="1000">
                <img class="pic11" src="<?php echo get_template_directory_uri() . '/static/images/pic1.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="parallax-layer parallax-layer__2" data-parallax-deep="40">
                <img class="absolute top-40 right-28 pic-2" src="<?php echo get_template_directory_uri() . '/static/images/pic2.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </div>
            <div class="parallax-layer parallax-layer__3" data-parallax-deep="100">
                <img class="pic-3" src="<?php echo get_template_directory_uri() . '/static/images/pic3.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
            </div>
        </div>

    </div>

</div>