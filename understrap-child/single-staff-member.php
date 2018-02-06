<?php
/**
 * The template for displaying staff pages
 *
 */

get_header();

global $post;
$custom 	= get_post_custom();
$name 		= get_the_title();
$name_slug	= basename(get_permalink());
$title 		= $custom["_staff_member_title"][0];
$email 		= $custom["_staff_member_email"][0];
$bio 		= $custom["_staff_member_bio"][0];
$prof 		= $custom["_staff_member_prof"][0];
$fb_url		= $custom["_staff_member_fb"][0];
$tw_url		= 'http://www.twitter.com/' . $custom["_staff_member_tw"][0];
$li_url		= $custom["_staff_member_li"][0];
if(has_post_thumbnail()){

	$photo_url = wp_get_attachment_url( get_post_thumbnail_id() );
	$photo = '<img class="staff-member-photo" src="'.$photo_url.'" alt = "'.$title.'">';
}else{
	$photo_url = '';
	$photo = '';
}
$email_mailto = '<a class="staff-member-email" href="mailto:'.antispambot( $email ).'" title="Email '.$name.'">'.antispambot( $email ).'</a>';

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="row">
						<div class="staff-InteriorPhoto">
							<?php echo do_shortcode($photo)?>
						</div>
					
						<div class="staff-infoWrap">
							<h2 class="staff-name"><?php echo do_shortcode($name)?></h2>
							<h3 class="staff-title">Hours &amp; Availability</h3>
							<p class="staff-bio"><?php echo do_shortcode($fb_url)?></p> <!-- This is the Staff Memeber Hours -->
						</div>
					</div>
					
					<div class="row">
						<div class="staff-galleryWrap">
							<p class="staff-gallery"><?php echo do_shortcode($bio)?></p>  <!-- This is the Staff Memeber Gallery -->
							<?php the_content();?>
						</div>
					</div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
