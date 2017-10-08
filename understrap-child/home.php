<?php
/*
Template Name: Home
*/
get_header(); ?>


<!-- BEGIN content -->
<div id="content" class="archives_post">
	<div class="single-content">
			
		<?php 
		if (have_posts()) :
		while (have_posts()) : the_post();
		?>
		
		<!-- begin post -->
		
		<div class="container single-artistContainer">	
			<div class="row">
				<div class="single-artistImageWrap">
					<?php 
						$image = get_field('artist_image');
						if( !empty($image) ): 
					?>
					
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
					<?php endif; ?>
				</div>
				
				<div class="single-artistInfoWrap">
					<div class="single-artistNameWrap">
						<h1 class="single-artistName">
							<a href="<?php the_permalink(); ?>" class="single-artistNameLink">
								<?php the_field( "artist_name" );  ?>
							</a>
						</h1>	
					</div>
					
					<hr>
					
					<div class="single-artistDatesWrap">
						<h4 class="single-artistDates">
							<?php the_field( "dates" );  ?>
						</h4>
					</div>
					
					<div <?php post_class('entry'); ?> >
						<?php the_content('Read more...'); ?>
					</div>
					
					<div class="single-readMoreWrap">
						<a href="<?php the_permalink(); ?>" class="single-readMore">Get the Details...</a>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php endwhile; ?>	
		<?php endif; ?>
	</div>
<div class="pagination">
	  <?php posts_nav_link(' '); ?> 
</div>
		
<?php get_footer(); ?>