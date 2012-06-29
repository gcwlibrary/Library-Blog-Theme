<?php
$args = array(
	'name'          => 'Homepage Top',
	'id'            => 'homepage-top',
	'description'   => 'Content for the top block of the homepage',
	'before_widget' => '<div id="%1$s" class="widget bg_light padding10 %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
	
	register_sidebar( $args );
	
	$args = array(
	'name'          => 'Homepage Left',
	'id'            => 'homepage-left',
	'description'   => 'Content for the left block of the homepage',
	'before_widget' => '<div id="%1$s" class="widget bg_light padding10 %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
	
	register_sidebar( $args );
	
	$args = array(
	'name'          => 'Homepage Right',
	'id'            => 'homepage-right',
	'description'   => 'Content for the right block of the homepage',
	'before_widget' => '<div id="%1$s" class="widget bg_light padding10 %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
	
	register_sidebar( $args );
?>