<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Minima_Jekyll
 * @since Minima Jekyll 1.0
 */

get_header();
?>

<main>
	<div class="centered">
	<h1>Posts</h1>
	<ul class="post-list">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;

			the_post();

			?>

        <li>
          <span class="post-date"><?php echo get_the_date() ?> </span>
          <h2>
            <a class="post-link" href="<?php the_permalink() ?>"><?php the_title() ?></a>
          </h2>
        </li>
			<?php
		}
	}
	?>

	</ul>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->



<?php
get_footer();
