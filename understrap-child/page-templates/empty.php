<?php
/**
 * Template Name: Empty Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post(); ?>

<div class="internalPage-container">
	<div class="row justify-content-center">
		<div class="internalPage-columns">
			<?php get_template_part( 'loop-templates/content', 'empty' ); ?>
		</div>
	</div>
</div>

<?php
endwhile;


get_footer();
?>