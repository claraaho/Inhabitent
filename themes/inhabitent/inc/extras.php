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
