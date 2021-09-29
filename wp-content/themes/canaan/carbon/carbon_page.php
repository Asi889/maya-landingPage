<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_page_options');
function crb_attach_page_options()
{
    $prefix = 'page-home';
    $post_template =  'page-templates/home.php';
    $metaBox = Container::make('post_meta', 'הגדרות כלליות')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make('date', $prefix . 'date', 'תאריך'),
        // Field::make('date',  'page-homedate', 'תאריך'),
        Field::make('image', $prefix . 'first_image', 'תמונה ראשונה'),
        Field::make('rich_text',"{$prefix}sub_title",'סאב-כותרת'),
            Field::make('rich_text',"{$prefix}section1_first_text",'טקסט ראשון'),
            Field::make('rich_text',"{$prefix}section1_second_text",'טקסט שני'),
        Field::make('image', $prefix . 'seconde_image', 'תמונה שנייה'),
        Field::make('image', $prefix . 'third_image', 'תמונה שלישית'),
        Field::make('complex', "{$prefix}benefits", 'רשימת יתרונות')
            ->add_fields(array(
                Field::make('text', 'title', 'יתרון')
            )),
        Field::make('complex', "{$prefix}navlinks", 'רשימת חלון עליון')
            ->add_fields(array(
                Field::make('text', 'title', 'שם הקישור'),
                Field::make('text', 'href', 'לינק  הקישור')
            )),
        Field::make('complex', "{$prefix}header_signup", 'כפתור התחברות')
            ->add_fields(array(
                Field::make('text', 'title', 'שם כפתור'),
                Field::make('text', 'href', 'לינק  הקישור')
            )),
        Field::make('complex', "{$prefix}header_register", 'כפתור הרשמה')
            ->add_fields(array(
                Field::make('text', 'title', 'טקסט'),
                Field::make('text', 'href', 'לינק  הקישור')
            )),
        Field::make('complex', "{$prefix}section2_icons", 'section_icons')
            ->add_fields( array(
                Field::make('image', 'image', 'Add Image'),
                Field::make('text', 'title', 'Insert Text'),
            )),
        Field::make('complex', "{$prefix}section7_logos", 'logos')
            ->add_fields( array(
                Field::make('image', 'image', 'Add logo'),
                Field::make('text', 'href', 'לינק  הקישור')

            )),
            Field::make('complex', "{$prefix}section3_slider", 'section3_slider_text')
            ->add_fields( array(
                Field::make('text', 'title', 'Insert Title'),
                Field::make('text', 'text', 'Insert Text'),
            )),
            Field::make('text',"{$prefix}youtubelink",'לינק לסרטון')
        ));
        // Field::make('complex', "{$prefix}section2_images", 'אייקונים קטנים')
        //     ->add_fields(array(
        //         Field::make('image', 'icon_magnifying_glass', 'זכוכית מגדלת'),
        //         Field::make('image', 'icon_hat', 'כובע'),
        //         Field::make('image', 'icon_card', 'כרטיס חתוך'),
        //         Field::make('image', 'icon_clock', 'שעון'),
        //         Field::make('image', 'icon_reskilling', 'הגדרות'),
        //         Field::make('image', 'icon_upskilling', 'איש'),
                
        //     )),

    $prefix = 'page-contact';
    $post_template =  'page-templates/contact-us.php';
    $metaBox = Container::make('post_meta', 'הגדרות כלליות')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make('rich_text', $prefix . 'date', 'תאריך'),
    ));
}


// add_action('carbon_fields_{container_type}_container_saved', 'crb__post_meta_container_save');
add_action('carbon_fields_post_meta_container_saved', 'crb__post_meta_container_save');

function crb__post_meta_container_save()
{
}
