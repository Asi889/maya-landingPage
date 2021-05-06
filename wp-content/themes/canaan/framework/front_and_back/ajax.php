<?php
defined('ABSPATH') || die();

//  add genral data

add_action('wp_ajax_new_lead', 'new_lead_cb');
add_action('wp_ajax_nopriv_new_lead', 'new_lead_cb');
function new_lead_cb(){

    die('s');
}

add_action('wp_ajax_contactus', 'contactus_cb_ajax');
add_action('wp_ajax_nopriv_contactus', 'contactus_cb_ajax');
function contactus_cb_ajax(){

    global $_POST;
    $email = $_POST['form-mail'];

    $data = $_POST;
 
    foreach ($data as $k => $v) {
        $data[$k] = wp_kses_data($v);
    }

    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('status' => 'fail', 'message' => pll__('המייל אינו תקין'), 'element' => 'email'));
        
        
        // echo('<h1>mail not good send again</h1>');
        die(); // bad request1
    }

    $to =['asafmarom89@gmail.com'];

    $email_content = '';
    foreach ($data as $key => $value) {
        $email_content .= '<p style="direction:rtl;"><b>'.$key.'</b>' . $value . '</p>';
    }
    $email_content = apply_filters('comment_moderation_text', $email_content);


    $subject = " הודעה מאתר  " . get_bloginfo('name');

    $headers = array('Content-Type: text/html; charset=UTF-8');

    @wp_mail($to, $subject, $email_content, $headers);
    echo json_encode(array('status' => 'sent', 'message' => pll__('ההודעה נשלחה בהצלחה')));
    die();
}


function field_trans($k)
{
    switch ($k) {
        case 'phone':
            return 'טלפון';
            break;
    }


    return $k;
}
