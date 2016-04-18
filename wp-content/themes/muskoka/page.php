<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
global $post;
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
			   
  <?php  endwhile;?>
  <section class="inner-wrapper">
    <div class="container">
      <h1><?php the_title();?></h1>
     <?php the_content();?>
    </div>
  </section>
  
<?php get_footer(); ?>
