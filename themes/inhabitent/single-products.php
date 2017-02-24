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

		<?php the_post_thumbnail( 'large'); ?>
		<h2><?php the_title(); ?></h2>
		<p><?php echo CFS()->get('price'); ?></p> 
		<?php the_content(); ?>

		
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
