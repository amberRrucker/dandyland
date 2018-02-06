<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _dandyland
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<header class="header-container">
			<div class="header-logo">
			</div>
		</header>
		
		<section class="about-wrapper">
			<div class="about-container">
				<div class="about-row">
					<div class="about-logoWrapper">
						<div class="about-logoImg">&nbsp;</div>
					</div>
				</div>
				<div class="about-row">
					<div class="about-textWrapper">
						<p class="about-tagline">Established in 1996, Dandyland Custom Tattoo and Professional Body Piercing has been adorning the San Antonio area and people worldwide with award winning tattoo art and high precision, high quality body piercings for over 21 years.</p>
					</div>
				</div>
				<div class="about-row">
					<div class="about-textWrapper">
						<h2 class="about-title">About</h2>
						<p class="about-desc">	Now located in the historic Deco District of San Antonio, Dandyland has been a namesake in not only the San Antonio tattooing and body piercing industry, but also the international body modification community as well. Throughout the years the same philosophy that we first opened our doors with still carries forth: Provide body art aficionados with the highest quality tattoos, piercings, and body jewelry possible in a safe, clean, positive environment. Keeping true to this philosophy has continued to make Dandyland San Antonio’s premier choice for body art, as evidenced by Dandyland having been voted the #1 tattoo and piercing studio in the San Antonio Current’s Readers Poll 14 of 16 years.</p>
					</div>
				</div>
			</div>
		</section>

		<div class="split-container">
		  <div class="split-item cat-tattooWrapper">
		    <div class="cat-tattooContainer">
			  <h2 class="cat-tattooTitle">Tattoos</h2>
			  <p class="cat-tattooText">Our dedicated, award-winning artists are here to create your unique, custom tattoos. The artists work primarily on appointment basis, but are more than happy to take walk-ins if scheduling allows.</p>
			  <div class="cat-tattooButtonContainer button-container">
			  	<a class="cat-tattooButton button" href="<?php echo get_site_url(); ?>/guest-artists">View Upcoming Guest Artists</a>
			  </div>
		    </div>
		
		  </div>
		  <div class="split-item cat-piercingWrapper">
		    <div class="cat-piercingContainer">
			  <h2 class="cat-piercingTitle">Piercings</h2>
			  <p class="cat-piercingText">Our piercers are the only members of the Association of Professional Piercers in San Antonio. We use nothing but the highest quality, implant grade , internally threaded jewelry. Our piercers annually attend the APP conference in Vegas to not only continue their education so they can keep up to date with industry standards, but also attend as educators, teaching classes for other piercers worldwide.</p>
			  <p class="cat-piercingText">If we don’t have exactly what you are looking for in stock, we have no problems getting it special ordered for you from our extensive list of reputable jewelry manufacturers. Our piercers are also very knowledgable in jewelry design, precious metals and gemstones, and aesthetics. Our piercers can aid you in designing and custom ordering your dream body jewelry.</p>
			  <div class="cat-piercingButtonContainer button-container">
			  	<a class="cat-piercingButton button" href="<?php echo get_site_url(); ?>/jewelry">View Jewelry Selection</a>
			  </div>
		    </div>
		  </div>
		</div>	
		
			
		<section class="artists-wrapper">
			<div class="artists-container">
				<div class="artists-row">
					<div class="artist-contentWrapper">
						<h2 class="artists-title">Tattoo Artists</h2>
						<div class="artists-galleryWrapper">
							<?php echo do_shortcode("[simple-staff-list group='Tattoo Artist']"); ?>
						</div>
					</div>
				</div>
				<div class="artists-row">
					<div class="artist-contentWrapper">
						<h2 class="artists-title">Piercers</h2>
						<div class="row justify-content-center">
							<div class="piercer-galleryWrapper">
								<?php echo do_shortcode("[simple-staff-list group='Piercer']"); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="gallery-wrapper">
			<div class="gallery-container">
				<div class="gallery-row">
					<div class="gallery-contentWrapper">
						<h2 class="gallery-title">Photostream</h2>
						<div class="gallery-galleryWrapper">
							<?php echo do_shortcode("[AFG_gallery id='1']"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="split-container">
			<div class="split-item contact-mapWrapper">
			    <a href="https://goo.gl/maps/GjqDrPHRJ2y" name="Visit the Shop">
					<div class="contact-mapImage">&nbsp;</div>
			    </a>
			</div>
		  
			<a name="contact">
			<div class="split-item contact-formWrapper">
				<div class="contact-formText">
					<h4>Contact</h4>
					<hr>
					<p><b>Phone: </b><a href="tel:2104325747" name="Call Us" class="contact-link">(210) 432-5747</a> | <b>Email: </b><a href="mailto:dandylandtattoo@sbcglobal.net" name="Email Us" class="contact-link">dandylandtattoo@sbcglobal.net</a></p>
					<p><b>Address: </b><a href="https://goo.gl/maps/GjqDrPHRJ2y" name="Visit the Shop" class="contact-link">1620 Fredericksburg Rd San Antonio, TX 78201</a></p>
				<?php echo do_shortcode('[contact-form-7 id="10" title="Contact form 1"]')?>
				</div>
				<div class="contact-formFacebook">
					<h4>Facebook</h4>
					<hr>
					<?php echo do_shortcode('[custom-facebook-feed]')?>
				</div>
			</div>
		</div>
		</a>

	</div><!-- #primary -->


<?php
get_footer();

