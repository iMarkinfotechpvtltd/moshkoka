<?php
/**
 * Template Name: Contact us Page
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
?>
<?php  endwhile;?>
				
  <section class="inner-wrapper">
    <div class="container">
      <h1>Contact Us</h1>
      <div class="contact-page">
        <table class="contact-top" width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
			<?php 
			global $post;
			query_posts('post_type=team&showposts=2&order=asc');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>						
			<div class="<?php if($i==1) { echo 'peter wow fadeInLeft'; } else { echo  'jennifer wow fadeInRight';			} ?>">
                <h4><?php the_title();?></h4>
                <h5> <?php the_field('professional'); ?> </h5>
                <p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br>
				<?php $newphone = get_field('direct_phone_number'); 
			
			if(!empty($newphone)) 
			{ ?>
                  CALL / TEXT <a href="tel:<?php the_field('direct_phone_number'); ?>"><?php the_field('direct_phone_number'); ?></a>
				  <?php
			}
			?></p>
              </div>
             <?php $i++;endwhile; wp_reset_query(); ?>
			 </td>
            <td>
			<div class="address">
                <?php the_field('address'); ?>
             </div>
            <div class="social-btns">
			  			<?php  
			$facebook=get_option_tree( 'facebook' );
			$google_link=get_option_tree('google');
			$twitter=get_option_tree('twitter');
			$youtube=get_option_tree('youtube');

			if(!empty($facebook)): 
			?>
			<a target="_blank" href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
			<?php endif; 
			if(!empty($twitter)): 
			?>
			<a target="_blank" href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
			<?php endif; 
			if(!empty($google_link)): 
			?>
			<a target="_blank" href="<?php echo $google_link ?>"><i class="fa fa-google-plus"></i></a>
			<?php endif; 
			if(!empty($youtube)): 
			?>
			<a target="_blank" href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a>
			<?php endif; ?> 
			</div>
			</td>
          </tr>
        </table>       
        <div class="contact-main">
        <div class="contact-form">
		  <?php echo do_shortcode('[contact-form-7 id="79" title="Contact form"]'); ?>
		   
        </div>
        <div class="contact-map">
		  <?php 		  $contact = get_field('map');			if( !empty($contact) ):				?>				<div class="acf-map">				<div class="marker" data-lat="<?php echo $contact['lat']; ?>" data-lng="<?php echo $contact['lng']; ?>"></div>				</div>				<?php endif; ?>						
		
        </div>
        </div>
        </div>
      </div>
    </div>
  
<?php get_footer();?>
