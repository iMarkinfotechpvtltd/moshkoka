<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <footer class="footer wow fadeInUp">
    <div class="container">
      <div class="footer-top clearfix">
        <div class="contact-info">
          <h3>Contact us</h3>
          <div class="row">
		  <?php 
			global $post;
			query_posts('post_type=team&showposts=3&order=ASC&orderby=post_date');
			$i=1;
			while (have_posts()) : the_post(); 
			$post_id=$post->ID;
			?>
            <div class="col-sm-4">
              <h4><?php the_title();?></h4>
               <p><?php the_field('professional'); ?> </p>
              <h5><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></h5>
              <h5>
			  <?php $newphone = get_field('direct_phone_number'); ?>
			  <?php
			  if(!empty($newphone)) 
			{ ?>
            CALL / TEXT <a href="tel:<?php the_field('direct_phone_number'); ?>"><?php echo $newphone;?></a>
			<?php
			} 
			?>
			</h5>
			<?php $officep = get_field('office_phone_number');
			if(!empty($officep)) 
			{ ?>
		
              <h5>OFFICE <a href="tel:<?php the_field('office_phone_number'); ?>"><?php echo  $officep; ?></a></h5>
			  <?php
			}
			?>
			  
            </div>
            <?php endwhile; wp_reset_query();  ?>
          </div>
        </div>
        <div class="site-map">
          <h3>Sitemap</h3>
          <ul>
			<?php

			$defaults = array(
			'theme_location'  => '',
			'menu'            => 'footer_menu',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '%3$s',
			'depth'           => 0,
			'walker'          => ''
			);

			wp_nav_menu( $defaults );

			?>
          </ul>
        </div>
        <div class="connect-with">
          <h3>Connect with us</h3>
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
          <div class="rmx-logo"><a href="<?php echo $footerlogoc = ot_get_option( 'footer_logo_link' ); ?>" target="_blank">
		 <img src="<?php echo $footerlogoc = ot_get_option( 'footer_logo' ); ?>" alt="ReMax" title="">
		</a><a href="<?php echo $footer_logo_2_link = ot_get_option( 'footer_logo_2_link' ); ?>" target="_blank">
		 <img src="<?php echo $footer_logo_2 = ot_get_option( 'footer_logo_2' ); ?>" alt="NO. 1 ReMax" title="">
		</a>
        
        </div>
        </div>
      </div>
      <div class="copyright-pk">
        <p>Produced by <a target="_blank" href="<?php echo $produced = ot_get_option( 'copyright_link' ); ?>"><?php echo $produced = ot_get_option( 'produced_by' ); ?></a> <span class="separator">|</span>  <?php echo $copy = ot_get_option( 'copy_right' ); ?></p>
      </div>
    </div>
  </footer>
</div>

<?php wp_footer(); ?>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script> 
<script>
wow = new WOW(
  {
  boxClass:     'wow',     
  animateClass: 'animated', 
  offset:       150,         
  mobile:       true,      
  live:         true       
}
)
wow.init();
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script> 
<script type="text/javascript">
jQuery('.listings-slider').owlCarousel({
    loop:true,
    nav:true,
	items:2,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	smartSpeed:800,
	nav: true,
	navText:["Prev","Next"],
    responsive:{
        0:{
			margin:0,
            items:1
        },
        600:{
			margin:30,
            items:2
        },
        1000:{
			margin:50,
            items:2
        },
		1200:{
			margin:76,
            items:2
        }
    }	
});

</script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {
	// var
	var $markers = $el.find('.marker');
	// vars
	var args = {
		zoom		: 16,
		scrollwheel	: false,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	// add a markers reference
	map.markers = [];
	// add markers
	$markers.each(function(){
    	add_marker( $(this), map );
	});
	// center map
	center_map( map );
	// return
	return map;
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
	// add to array
	map.markers.push( marker );
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}
}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {
	// vars
	var bounds = new google.maps.LatLngBounds();
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
		bounds.extend( latlng );
	});
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}
}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;
$(document).ready(function(){
	$('.acf-map').each(function(){
		// create map
		map = new_map( $(this) );
	});
});

})(jQuery);


</script>
  
</body>
</html>
