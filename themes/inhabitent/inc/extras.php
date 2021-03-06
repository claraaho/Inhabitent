<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Changing login logo to Inhabitent.
 */
function login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
			background-size: 94%; 
			padding-bottom: 27px;
			width: 100%;
			height: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

/**
 * Changing login logo link to Inhabitent Homepage.
 */
function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

/**
 * Changing product archive title.
 */
function product_archive_title($title) {
	if(is_post_type_archive('products')) {
		$title = 'Shop Stuff';
	}elseif(is_post_type_archive('adventures')) {
		$title = 'Latest Adventures';
	}
	return $title;
}
add_filter('get_the_archive_title', 'product_archive_title');

/**
 * Removing 'Product Type' from products archive title and leaving tax.
 */
function product_archive_tag($title) {
	if(is_tax()) {
		$title = single_term_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'product_archive_tag');


/**
 * Customizable about hero image
 */
function inhabitent_about_css() {
	if(!is_page_template('page-templates/about.php')) {
		return;
	}

	$image = CFS()->get('about_hero_image');

	if(!$image) {
		return;
	}

	$hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
		height: 100vh;
	}";
	wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_css' );