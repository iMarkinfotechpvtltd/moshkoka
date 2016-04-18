<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
  <section class="home-banner animated fadeIn">
    <div id="home-banner" class="carousel carousel-fade slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
	  	<?php  
		global $post;
		$i=1;
		query_posts('post_type=main_slider&showposts=6'); ?>
		<?php 
		while (have_posts()) : the_post(); 
		    $post_id= $post->ID;
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'home_slider_image' );
			$urla = $thumb['0'];
				if($i==1)
				{
					if(!empty($urla)) 
					{
					?>
					<div class="item active" style="background-image:url(<?php echo $urla;?>);"> </div>
					
					<?php
					}
				}
					else
					{
					?>
					<div class="item" style="background-image:url(<?php echo $urla;?>);"> </div>
					<?php 
					}
			
			$i++;
     	endwhile; wp_reset_query(); 
			?>
      </div>
    </div>
  </section>
  <div class="container">
    <section class="welcome-home wow bounceInUp">
      <h1><?php the_field('home_title'); ?></h1>
      <?php the_field('welcome_text'); ?>
	 
      <div class="explore-track"><a href="<?php bloginfo('url'); ?>/listings" class="explore-btn wow fadeIn">Explore Property Listings</a></div>
    </section>
    <section class="middle clearfix">
      <div class="three-blocks"> <a href="<?php bloginfo('url'); ?>/listings" class="wow bounceInUp" data-wow-duration="0.5s">
        <figure class="follow-icon"></figure>
         <?php the_field('follow'); ?>
        </a> <a href="<?php bloginfo('url'); ?>/listings" class="wow bounceInUp" data-wow-duration="1s">
        <figure class="discover-icon"></figure>
        <?php the_field('discover'); ?>
        </a> <a href="<?php bloginfo('url'); ?>/listings" class="wow bounceInUp" data-wow-duration="1.5s">
        <figure class="explore-icon"></figure>
         <?php the_field('explore'); ?>
        </a> </div>
      <div class="testimonials wow fadeInUp">
        <div id="testimonials" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner" role="listbox">
		  <?php 
			global $post;
			query_posts('post_type=testimonials&showposts=5');
			
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			
			
			?>
			
            <div class="item <?php if($i==1) { echo 'active'; } ?>">
              <h3><?php the_title();?></h3>
              <?php the_content();?>
			  <cite>
              <h4><?php the_field('name'); ?> </h4>
              <?php the_field('address'); ?></cite>
			</div>
			<?php
			
			
			$i++;
     	    endwhile; wp_reset_query(); 
		     ?>
			 
			  
            </div>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php 
			global $post;
			query_posts('post_type=testimonials&showposts=5');
			
			$i=0;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			
			
			?>
			<li data-target="#testimonials" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0) { echo 'active'; } ?>"></li> 
			<?php $i++;endwhile; wp_reset_query(); ?>
			
          </ol>
        </div>
      </div>
    </section>
    <section class="team-wrapper">
      <h2>Our Team </h2>
      <div class="team-boxes clearfix">
		 <?php 
			global $post;
			query_posts('post_type=team&showposts=3&order=ASC&orderby=post_date');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
        <div class="box-team clearfix wow <?php if($i==1) { echo 'fadeInLeft'; } elseif($i==3) { echo 'fadeInUp'; } else { echo 'fadeInRight'; } ?>"> 
		<?php
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'our_team_image' );
		$url = $thumb['0'];
		if(!empty($url)) 
			{
			?>
			<img src="<?php echo $url;?>" alt="<?php the_title();?>">
			<?php
			}
			else
			{
			?><img src="http://placehold.it/225x217" alt="<?php the_title();?>">
			<?php
			}
			?>
		    <h3><?php the_title();?></h3> 
            <p><?php the_field('professional'); ?> </p>
			<h4>
			<?php $newphone = get_field('direct_phone_number'); 
			
			if(!empty($newphone)) 
			{ ?>
            CALL / TEXT: <a href="tel:<?php the_field('direct_phone_number'); ?>"><?php echo $newphone;?></a><br>
			<?php
			}
			?>
			<?php $officep = get_field('office_phone_number');
			if(!empty($officep)) 
			{ ?>
			
            OFFICE: <a href="tel:<?php the_field('office_phone_number'); ?>"><?php echo  $officep; ?></a>
			<?php
			}
			?></h4>
          <h5><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></h5>
        </div>
       <?php $i++;endwhile; wp_reset_query(); ?>
			
      </div>
    </section>
  </div>
<section class="home-video-wrap">
<div class="container">
<h2>Live A Great Life... in Muskoka!</h2>
<?php $newvideo =  get_field('video_home_page');
if(!empty($newvideo))
{
			?>
<div class="video-box">
<iframe src="<?php echo $newvideo;?>?rel=0&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe>
</div>
<?php
}
?>
</div>
</section>

  <section class="listings-wrapper wow fadeInUp">
    <div class="container">
      <h2>Your Best Move Starts Here!</h2>
      <div class="owl-carousel listings-slider">
	  <?php 
			global $post;
			query_posts('post_type=properties&showposts=10');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
			
        <div class="item">
          <a class="listing-box" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="ribbon-new">New</div>
			 <?php			 $image33 = get_post_meta($post_id,"new_property__image",true);			 $aggregate_images = wp_get_attachment_image_src($image33,'properties_image');			 $ursl = $aggregate_images[0];   		
		if(!empty($ursl)) 
			{
			?>
			<img src="<?php echo $ursl;?>" alt="<?php the_title();?>">
			<?php
			}
			else
			{   
			?><img src="https://placeholdit.imgix.net/~text?txtsize=26&txt=No+image+found&w=549&h=358" alt="<?php the_title();?>">
			<?php
			}
			?>
			
            <div class="listing-content">
              <div class="listing-inner">
                <h3><?php the_field('price'); ?></h3>
                <p><?php the_title();?></p> 
               
              </div>
            </div>			</a>
        </div>
		 <?php $i++;endwhile; wp_reset_query(); ?>
     </div>
     
     <div align="center"><a href="<?php bloginfo('url'); ?>/listings" class="see-more-btn">See More Listings</a></div>
    </div>
  </section>
<?php get_footer();?>
