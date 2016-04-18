<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 
$posiid =15;
?>
	<?php

	$image3 = get_post_meta($posiid,"banner_image",true);

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


<!-- Modal -->
<div class="modal fade" id="video-pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog video-popup" role="document">
    <div class="modal-content">
<a href="javascript:void(0);" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times" aria-hidden="true"></i></a>
 <iframe src="https://www.youtube.com/embed/Utj45U_8HGA" frameborder="0"></iframe>
    </div>
  </div>
</div>
<!--- Modal End --->

  <section class="inner-wrapper list-details">
    <div class="container">
	<?php while (have_posts()) : the_post(); ?>
									
									
      <h1><?php the_title();?>
        <address>
         <?php the_field('address'); ?>
        </address>
      </h1>
      <div class="listings-details-page clearfix">
        <div class="return-btn"><a href="<?php bloginfo('url'); ?>/listings">Return to Listings</a></div>
        <div class="main-section">
          <div class="media-section">
            <div class="video-tour"> <a href="javascript:void(0);" class="tour-btn" data-toggle="modal" data-target="#video-pop">Video Tour</a> 
			<?php
			 $image33 = get_post_meta($post->ID,"single_property_image",true);
			$aggregate_images = wp_get_attachment_image_src($image33,'single_image');
			 $ursla = $aggregate_images[0];   
				if(!empty($ursla)) 
				{
				?>
					 <img src="<?php echo $ursla;?>">
				
				<?php
				}
				else
				{
				?>
				 <img src="http://placehold.it/586x476">
				<?php
				}
				?>

			</div>
			<?php 

				$location = get_field('property_map');

				if( !empty($location) ):
				?>
				
            <div class="location-map">
				
				<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				
            <?php //the_field('property_map'); ?> </div><?php endif; ?>
            <div class="bottom-btns"><a href="<?php bloginfo('url'); ?>/contact-us">Request More Info</a><a href="<?php bloginfo('url'); ?>/contact-us">Request More Showing</a><a href="<?php bloginfo('url'); ?>/listings">See Similar Listing<br> describe criteria</a></div>
          </div>
		  
          <div class="prop-details">
            <div class="white-bg"></div><h2>Offered at <strong><?php the_field('price'); ?></strong></h2>
            <div class="prop-info clearfix"><span><?php the_field('square_ft'); ?><small>Square Ft.</small></span> <span><?php the_field('baths'); ?><small>Baths</small></span> <span><?php the_field('bedroms'); ?><small>Bedroms</small></span> <span><?php the_field('garages'); ?><small>Garages</small></span>  </div>
            <div class="prop-location-area">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
					 <?php $new = get_field('town/city');
					 if(!empty($new))
					 {
					 ?>
                  <td>Town/City:</td>
                  <td><?php echo $new; ?></td>
				  <?php
					 }
					 ?>
                </tr>
                <tr>
				  <?php $properity = get_field('property_size');
				      if(!empty($properity))
					 {
					 ?>
                  <td>Property Size:</td>
                  <td><?php echo $properity; ?></td>
					<?php
					}
					?>
                </tr>
                <tr>
					<?php $tolal = get_field('total_living_area');
					 if(!empty($tolal))
					 {
					 ?>
                  <td>Total Living Area:</td>
                  <td><?php echo $tolal; ?></td>
					 <?php
					 }
					 ?> 
                </tr>
              </table>
            </div>
			<?php if(!$post->post_content=="") : ?>
            <div class="prop-description">
				
              <?php the_content();?>
			  
            </div>
			<?php endif; ?>
          </div>
        </div>
      </div>
	  <?php  endwhile;?>
    </div>
  </section>
  

<?php get_footer(); ?>
