<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<div class="archive-links">
				<?php $items=get_terms( array( 'taxonomy'=> 'product_type', 'orderby' => 'name'));?>
				<?php foreach ( $items as $item ): ?>
                <?php $url = get_term_link($item->slug, 'product_type');?> 
                    <a href='<?php echo $url?>'><?php echo $item->name ?></a>
                <?php endforeach; ?>
				</div>
			</header><!-- .page-header -->
			
			<div class="shop-container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-wrapper">
			<?php if ( has_post_thumbnail() ) : ?>
            	<a href='<?php the_permalink();?>'><?php the_post_thumbnail('medium'); ?></a>
        	<?php endif; ?>
			

			<div class="product-content">
				<div><p><?php the_title(); ?></p></div>
				<p><?php echo CFS()->get('price'); ?></p> 
			</div><!-- .content-wrapper -->
			</div><!-- .product-wrapper -->
			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>
			</div><!-- .shop-container -->
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
