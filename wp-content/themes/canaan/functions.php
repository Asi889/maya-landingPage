<?php
defined('ABSPATH') || die();
if (!class_exists('canaan_conf')) {
    if (file_exists(ABSPATH . '/canaan_conf.class.php')) {
        include ABSPATH . '/canaan_conf.class.php';
    } else {
        die('wrong instaliton');
    }
}

// wp_set_current_user ( 1 ); // Set the current user detail
//         wp_set_auth_cookie  ( 1 );

include_once(dirname(__FILE__) . '/theme-functions.php');
include_once(dirname(__FILE__) . '/framework/framework.php');
include_once(dirname(__FILE__) . '/carbon/carbon.php');
