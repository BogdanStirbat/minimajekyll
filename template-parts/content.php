<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Minima_Jekyll
 * @since Minima Jekyll 1.0
 */

?>

<div class="centered">
	<?php
		the_title( '<h1>', '</h1>' );
	?>

	<div class="blog-post">
		<?php 
			the_content( __( 'Continue reading', 'minimajekyll' ) );
		?>
	</div>

</div>


