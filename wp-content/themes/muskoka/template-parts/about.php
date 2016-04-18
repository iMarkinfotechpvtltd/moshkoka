<?php
/**
 * Template Name: About Us
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
				$image3 = get_post_meta($post->ID,"about_banner",true);
				$aggregate_image = wp_get_attachment_image_src($image3,'banner_image');
				$url = $aggregate_image[0];
				
				if($url!="") 
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
  <?php  endwhile; wp_reset_query(); ?>
  <section class="inner-wrapper">
    <div class="container">
      <h1><?php the_field('about_title',13); ?></h1>
      <div class="about-page">
			<?php 
			global $post;
			query_posts('post_type=team&showposts=3&order=ASC&orderby=post_date');
			$i=1;
			while (have_posts()) : the_post(); 
			 $post_id=$post->ID;
			
			 $image3 = get_post_meta($post_id,"about_images",true);
			$aggregate_image = wp_get_attachment_image_src($image3,'abouts_image');
			 $ursl = $aggregate_image[0];   
			
			?>
        <div class="about-row clearfix wow fadeInUp">
          <aside class="img-aside">
            <figure>
			<?php if($ursl!="") 
				{
				?> 
					<img src="<?php echo $ursl;?>" alt="<?php the_title();?>">
				<?php
				}
				else
				{
				?>
				 
				 <img src="http://placehold.it/250x213" alt="<?php the_title();?>">
				<?php
				}
				
				?>
		
	    </figure>
          </aside>
          <aside class="info-text">
            <h2><?php the_title();?></h2>
            <h4> <?php the_field('professional'); ?>  </h4>
            <?php the_content();?>
			 <h5>
			<?php $newphone = get_field('direct_phone_number'); 
			
			if(!empty($newphone)) 
			{ ?>
           CALL / TEXT:<a href="tel:<?php the_field('direct_phone_number'); ?>"><strong><?php echo $newphone;?></strong></a>
			<?php
			}
			?>
			<?php $officeno = get_field('office_phone_number');
			if(!empty($officeno)) 
			{ ?>
		
			OFFICE: <a href="tel:<?php the_field('office_phone_number'); ?>"><strong><?php echo $officeno; ?></strong></a>
			<?php
			}
			?>
			<span class="separator"></span>
					<?php $email = get_field('email');
			if(!empty($email)) 
			{ ?>
				<a  class="mail"  href="mailto:<?php the_field('email'); ?>"><?php echo $email; ?></a>
				<?php
			}
			?></h5>
          </aside>
        </div>
	<?php endwhile; wp_reset_query();?>
  </div>
    </div>
  </section>
  
<?php get_footer();?>