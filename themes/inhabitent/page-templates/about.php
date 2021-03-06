<?php
/**
* Template Name: About Page
*
* @package Inhabitent Theme
*/

get_header(); ?>
<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
   

    <div class="about-content-wrapper">
        <h2>Our Story</h2>
        <?php echo CFS()->get('about_our_story'); ?>
        
        <h2>Our Team</h2>
        <?php echo CFS()->get('about_our_team'); ?>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
