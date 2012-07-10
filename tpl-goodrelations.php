<?php
/*
Template Name: Good Relations - for embedded data
*/
?>
<?php get_header('goodrelations'); ?>

<?php //$root = get_stylesheet_directory(); ?>



<section id="cwd_content" class="cwd_container nometa" data-template="page">

	<div class="grid_12 column bg_white">

		<div class="grid_two_thirds column first">
				<div class="breadcrumbs padding_top padding_left">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>

				<?php if(have_posts()): ?>
				
					<?php while(have_posts()): the_post(); ?>
				
						<article class="article">
				
							<h1 class="post-title padding_top padding_left">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>
														
							<div class="post-content padding_left padding_bottom">
								<?php the_content(); ?>
							</div>
							
							<div class="post-comments padding_left padding_bottom">
	
								<?php comments_template( '', true ); ?>
							
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
