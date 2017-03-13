<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="adventure-picture">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<div class="adventures-content-wrapper">
				<div class="meta-data">
					<h2><?php the_title(); ?></h2>
					<p>By <?php the_author(); ?></p>
				</div>
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
			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
