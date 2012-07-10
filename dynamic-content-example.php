<?php
/**
 * Subtemplate: Dynamic content example
 *
 * The widget generates a local loop, so you can call all of the
 * regular WordPress functions from within this template.
 *
*/
?>
<strong class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong>
<span class="text">
	<?php the_content(); ?>
</span>
<?php
	if ($post->post_type == 'page') {
?>
<span class="category">Page</span>
<?php
	} else {
?>
<span class="category">Blog</span>
<?php
	}
?>