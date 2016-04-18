<?php
/**
 * Template Name: live in muskoka
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); global $post;
while (have_posts()) : the_post(); 

?>
<?php
$image3 = get_post_meta($post->ID,"banner_image",true);
$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
$url = $aggregate_image['0'];
if(!empty($url)) 
{
?>

<section class="inner-banner animated fadeIn" style="background-image:url(<?php echo $url;?>);"></section>
<?php
}
else
{
?>
<section class="inner-banner animated fadeIn" style="background-image:url(http://placehold.it/1500x296)"></section>
<?php
}
?>
<section class="home-video-wrap">
  <div class="container">
    <h2>Live A Great Life... in Muskoka!</h2>
    <div class="video-box">
      <iframe src="https://www.youtube.com/embed/Utj45U_8HGA?rel=0&amp;showinfo=0&amp;controls=0" frameborder="0" allowfullscreen=""></iframe>
    </div>
  </div>
</section>
<div class="bottom-logos-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-6"><a href="http://explorersedge.ca/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/exploreres-edge-logo.png" alt=""/></a></div>
      <div class="col-sm-3 col-xs-6"><a href="http://www.muskoka.on.ca/en/index.aspx" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/district-of-muskoka-logo.png" alt=""/></a></div>
      <div class="col-sm-3 col-xs-6"><a href="http://www.discovermuskoka.ca/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/muskoka-logo.png" alt=""/></a></div>
      <div class="col-sm-3 col-xs-6"><a href="http://bracebridgechamber.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/chamber-of-com-bracebridge-logo.png" alt=""/></a></div>
    </div>
  </div>
</div>
<?php  endwhile;?>
<?php get_footer();?>
