<?php
/**
 * The template for displaying single products page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="single-product-wrapper">
			<?php the_post_thumbnail( 'large'); ?>
			<div class="products-content">
				<h2><?php the_title(); ?></h2>
				<p class="product-price"><?php echo CFS()->get('price'); ?></p> 
				<?php the_content(); ?>
				<div class="media-container">
					<button type="button" class="media-buttons">
						<i class="fa fa-facebook" aria-hidden="true"></i>Like
					</button>
					<button type="button" class="media-buttons">
						<i class="fa fa-twitter" aria-hidden="true"></i>Tweet
					</button>
					<button type="button" class="media-buttons">
						<i class="fa fa-pinterest" aria-hidden="true"></i>Pin
					</button>
				</div>
			</div>
		</div>
		
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
