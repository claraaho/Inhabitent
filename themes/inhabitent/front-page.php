<?php /** * The template for displaying the home page. * * @package RED_Starter_Theme */ get_header(); ?>
<section class="home-hero">
    <img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
</section>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        

        <!-- PRODUCTS POSTS -->
        <?php $items=get_terms( array( 'taxonomy'=> 'product_type', 'orderby' => 'name'));?>

        <div class="products-container">
            <h2>Shop Stuff</h2>
            <div class="stuff-container">
                <?php foreach ( $items as $item ): ?>
                <?php $url = get_term_link($item->slug, 'product_type');?> 
                <div class="stuff-wrapper">
                    <img src="<?php echo get_template_directory_uri();?>/images/<?php echo $item->slug; ?>.svg" alt="">

                    <p>
                        <?php echo $item->description; ?></p>

                    <a href='<?php echo $url?>'><?php echo $item->name ?> Stuff</a>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- .stuff-container -->
        </div>
        <!-- .products-container -->

        <!-- JOURNAL POSTS -->
        <h2 class="home-titles">Inhabitent Journal</h2>
            <div class="newsfeed-container">
                <?php $args=array( 'posts_per_page'=> 3, 'order'=> 'DSC', 'orderby' => 'post_datgulpe' ); 
                $postslist = get_posts( $args ); 
                foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
                <div class="latest-wrapper">
                    <div class="product-picture">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="latest-container">
                        <span><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
                        <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
                        <a class="read-link" href='<?php echo get_permalink($post);?>'>Read Entry</a>
                    </div>
                </div>
                <!-- .latest-wrapper -->
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <!-- .newsfeed-container -->

        <!-- ADVENTURES PANEL -->
        <?php $adventures = get_posts(array( 'post_type' => 'adventures', 'order' => 'ASC' )); ?>
        <h2 class="home-titles">Latest Adventures</h2>
        <div class="adventure-container clearfix">
            <?php foreach ( $adventures as $adventure ): ?>
                <div class="adventure-wrapper">
                    <img src="<?php echo get_the_post_thumbnail_url($adventure); ?>">
                    <a class="adventure-title" href='<?php echo get_permalink($adventure);?>'><?php echo get_the_title($adventure); ?></a>
                    <a href='<?php echo get_permalink($adventure);?>'>Read More</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="adventures-link-container">
            <a class="adventures-link" href='<?php echo get_post_type_archive_link('adventures');?>'>More Adventures</a>
        </div>
    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>