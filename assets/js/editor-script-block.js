/**
 * Remove squared button style
 *
 * @since Minima Jekyll 1.0
 */
/* global wp */
wp.domReady( function() {
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
} );
