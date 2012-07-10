<?php
/*
Template Name: Homepage
*/
?>
<?php get_header() ?>

<section id="cwd_content" class="cwd_container" data-template="page">

	<div class="grid_12 column bg_white">

		<div class="grid_two_thirds column first">
										
				<?php if(have_posts()): ?>
				
					<?php while(have_posts()): the_post(); ?>
				
						<article class="article">
				
							<!--<h1 class="post-title padding_top padding_left">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>-->
														
							
							<?php if(function_exists('wp_content_slider')) : ?>
							<div class="padding_left padding_top">
								<?php wp_content_slider(); ?>
							</div>
							<?php endif; ?>
							
							<?php if( is_active_sidebar ( 'homepage-top' ) ) : ?>
							<div class="padding_left padding_top">
								<?php dynamic_sidebar( 'homepage-top' ); ?>
							</div>
							<?php endif ?>
							
							<div class="post-content padding_left padding_top padding_bottom library-home column first">
								<?php dynamic_sidebar( 'homepage-left' ); ?>
							</div>
							
							<div class="post-content padding_top padding_bottom library-home column last">
								<?php dynamic_sidebar( 'homepage-right' ); ?>
							</div>
							
							<?php if(is_buddypress()): ?><hr class="margin_left"><?php endif; ?>
									
						</article>
					
					<?php endwhile; ?>
				
				<?php endif; ?>
				
			<?php if(is_buddypress()): ?>
			<aside class="grid_4 column first">
				<?php if ( ! dynamic_sidebar( 'frontpage-bottom-left' ) ) : ?><?php endif; ?>
				&nbsp;
			</aside>	
			
			<aside class="grid_4 column last">
				<?php if ( ! dynamic_sidebar( 'frontpage-bottom-right' ) ) : ?><?php endif; ?>
				&nbsp;
			</aside>								
			<?php endif; ?>

		</div>
		
		<?php get_sidebar() ?>
	
	</div>

</section>

<?php get_footer() ?>
