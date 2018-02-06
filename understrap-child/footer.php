<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<footer class="footer-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="footer-copyright">
				<div class="footer-logo"></div>
				<p class="footer-copyrightText">Copyright 2017 Dandyland Tattoos<br>
					Design & Development by Amber Builds It
				</p>
			</div>
			
			<div class="footer-social">
				<a href="https://www.facebook.com/dandylandtx/" target="_blank"><div class="footer-icon footer-facebook">&nbsp;</div></a>
				<a href="https://www.instagram.com/dandylandtx/" target="_blank"><div class="footer-icon footer-instagram">&nbsp;</div></a>
				<a href="https://goo.gl/maps/wgrcQWbz7sD2" target="_blank"><div class="footer-icon footer-google">&nbsp;</div></a>
				<a href="https://www.yelp.com/biz/dandyland-custom-tattoo-and-professional-body-piercing-san-antonio" target="_blank"><div class="footer-icon footer-yelp">&nbsp;</div></a>
			</div>
					

		</div><!-- row end -->

	</div><!-- container end -->

</footer><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

