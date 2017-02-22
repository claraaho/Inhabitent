<?php
/**
 * The template for displaying the home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
     <section class="home-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
    </section>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>

            <div class="newsfeed-wrapper">
   <?php
global $post;
$args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'orderby' => 'post_date' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<ul class="latest-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
            <li><?php the_post_thumbnail('large'); ?></li>
        <?php endif; ?>
		<li><?php the_date(); ?></li>
		<li><?php the_title(); ?></li>   
	</ul><!-- .latest-wrapper -->
<?php
endforeach; 
wp_reset_postdata();
?>              
   </div><!-- .newsfeed-wrapper -->

   <!--<div class="adventure-container">
       <div class"picture-wrapper">
           <h3>Getting Back to Nature in a Canoe</h3>
       </div>

   </div>-->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>

