<?php
/**
 * Ketoshop Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ketoshop Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_KETOSHOP_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'ketoshop-astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_KETOSHOP_ASTRA_CHILD_VERSION, 'all' );

}

/**
 * Shop page - Short Description
 */
if ( ! function_exists( 'astra_woo_shop_product_short_description' ) ) :
	/**
	 * Product short description
	 *
	 * @hooked woocommerce_after_shop_loop_item
	 *
	 * @since 1.1.0
	 */
	function astra_woo_shop_product_short_description() {
		?>
		<?php if ( has_excerpt() ) { ?>
		<div class="ast-woo-shop-product-description">
		    <p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
		</div>
	<?php } ?>
		<?php
	}
endif;


add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
add_theme_support( 'woocommerce' );


