<?php
/**
 * Template Name: Sold
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
		endwhile;
		?>
   <section class="inner-wrapper">
    <div class="container">
      <h1>Sold Properties</h1>
      <div class="listings-page sold clearfix">
		<?php

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		query_posts(array(
		'post_type'      => 'properties', // You can add a custom post type if you like
		'paged'          => $paged,
		'posts_per_page' => 9,
		'properties_categories' => 'Sold'

		));

		while (have_posts()) : the_post(); 
		?>

        <div class="listing-block wow fadeInUp">
          <figure><?php
		$thumb2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'listing_image' );
		$urls = $thumb2['0'];
		if(!empty($urls)) 
			{
			?>
			<img src="<?php echo $urls;?>" alt="<?php the_title();?>">
			<?php
			}
			else
			{   
			?><img src="http://placehold.it/345x334" alt="<?php the_title();?>">
			<?php
			}
			?></figure>
          <h3><?php the_title();?></h3>
           <h4><?php the_field('address'); ?></h4>
          <h3 class="price"><?php the_field('price'); ?></h3>
         
        </div>
		<?php endwhile; ?>
      
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="custom-pagination">
			<?php echo my_pagination();?>
			</div>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
	</div>
    </div>
  </section>
  
  
<?php get_footer();?>
