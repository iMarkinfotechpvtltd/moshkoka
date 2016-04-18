<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="container">
		 

			<section class="error-404 not-found error-pk">
				 <img src="<?php echo get_template_directory_uri(); ?>/images/404_page_not_found.png" alt=""/>
			</section><!-- .error-404 -->

		 

		<?php //get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
