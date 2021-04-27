<?php
defined('ABSPATH') || die();

/**
 * Template Name: Contact
 * Description: עמוד הבית
 *
 */



global $post;
$prefix='home_';
$mainObj=new canaan_post($post);





get_header();
 
echo get_page_template_slug() ;

?>
<main  class="col-1-1">
 
 <article>
 <?php

 ?>
 
 </article>
</main>



<?php 

get_footer();
