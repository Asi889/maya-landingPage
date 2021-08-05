<?php



?>
<form action="" name='form' class="lp_form-js" method="POST">
    <div id="section-8" class="lp_section8   bg-mainOrange">
        <!-- <div class="pp  "> -->



        <div class="flex-row lp_sec8_right mx-10">

            <h1 class="lp-section8-title my-5">צרו עימנו קשר</h1>
            <p class="lp_sec8_text">יש לכם שאלה?</p>
            <p class="lp_sec8_text">מלאו את הפרטים ונחזור אליכם בהקדם</p>

        </div>

        <div class="lp_sec8_left flex-row mx-10">

            <div class="lp_section8_left_radio_container">

                <div class="text-mainWhite ">
                    <input id="input1" type="radio" checked class="lp_sec8_checkbox mx-2" name="look_for_job_education" value="looking">
                    <label for="input1 " class="lp_sec8_text">מחפש עבודה/לימודים</label>
                </div>

                <div class="text-mainWhite">
                    <input id="input2" type="radio" class="lp_sec8_checkbox mx-2" name="look_for_job_education" value="eployer">
                    <label for="input2" class="lp_sec8_text">מעסיק</label>
                </div>

                <!-- <div class="text-mainWhite">
                    <input id="input3" type="radio" class="lp_sec8_checkbox mx-2" name="look_for_job_education" value="help">
                    <label for="input3" class="lp_sec8_text">מרכז ייעוץ תעסוקתי</label>
                </div> -->
            </div>

            <div class="flex-col">
                <input id="input4" class="lp_sec8_inputs  mx-2 my-2 " type="text" placeholder="שם מלא" name="full-name">
                <input type="tel" placeholder="טלפון" class="lp_sec8_inputs mx-2 my-2" name="form-tel">
            </div>

            <div class="flex-col">
                <input type="email" placeholder="מייל" class="lp_sec8_inputs mx-2 my-2" name="form-mail">
                <button class="lp_sec8_inputs mx-2 my-2">שלח</button>
            </div>

            <div class="message_box">

            </div>

        </div>
        <!-- </div> -->
    </div>
</form>