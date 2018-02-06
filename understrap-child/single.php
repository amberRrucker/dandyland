<?php get_header(); ?>

<div class="internal-artistContainer container">
	<div class="row">
		<div class="internal-artistImageWrap">
			<?php 
				$image = get_field('artist_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php endif; ?>
		</div>
		
		<div class="internal-artistInfoWrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="entry <?php if(is_home() && $post==$posts[0] && !is_paged()) echo ' firstpost';?>">
				<div class="internal-artistTitlesWrap">
					<h1 class="internal-artistName">
						<?php the_field( "artist_name" );  ?>
					</h1>
					
					<hr>
					
					<h4 class="internal-artistDates">
						<?php the_field( "dates" );  ?>
					</h4>
				</div>
				
				<div class="internal-artistContent">
					<?php the_content(__('Read more'));?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?> </p>

<?php endif; ?>
		
<?php get_footer(); ?>