<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php bloginfo('name'); ?></title>
		
	<meta name="author" content="Online Services Team; ost@lincoln.ac.uk">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="shortcut icon" href="http://c411047.r47.cf3.rackcdn.com/favicon.ico">
		
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Blog Posts RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Blog Posts Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (isset($_GET['cwd-beta'])): ?>
	<link rel="stylesheet" href="http://cwd-dev.online.lincoln.ac.uk/base.min.css">
	<link rel="stylesheet" href="http://cwd-dev.online.lincoln.ac.uk/cwd.min.css" media="(min-width:320px)">
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="http://cwd-dev.online.lincoln.ac.uk/ie.min.css">
	<![endif]-->
	<link rel="stylesheet" href="http://cwd-dev.online.lincoln.ac.uk/interact.min.css">
	<?php else: ?>
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/base.min.css">
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/cwd.min.css" media="(min-width:320px)">
	<!--[if (lt IE 9) & (!IEMobile)]>
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/ie.min.css">
	<![endif]-->
	<link rel="stylesheet" href="http://c411047.r47.cf3.rackcdn.com/interact.min.css">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?a043f4c807bbb1faab39c113684920952aff0bb9" />
	
	<?php if (isset($_GET['cwd-beta'])): ?>
	<script src="http://cwd-dev.online.lincoln.ac.uk/modernizr.js"></script>
	<?php else: ?>
	<script src="http://c411047.r47.cf3.rackcdn.com/modernizr.js"></script>
	<?php endif; ?>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class() ?> itemscope itemtype="http://schema.org/Blog">

	<?php do_action( 'bp_before_header' ) ?>
	
	<header id="cwd_header" role="banner">
		
		<section class="cwd_container">
			
			<hgroup class="grid_row" id="cwd_hgroup">
			
					<meta itemprop="image" content="http://c411047.r47.cf3.rackcdn.com/logo-minerva-black.png">

					<h1 class="column grid_12 <?php if (get_bloginfo('description') !== ''): ?>has_tag_line<?php endif; ?>" itemprop="name">
						<a href="<?php echo site_url() ?>" title="Home" itemprop="url">
							<?php bloginfo('name'); ?>
						</a>
						<?php if (get_bloginfo('description') !== ''): ?>
							<small><?php echo get_bloginfo('description'); ?></small>
						<?php endif; ?>
					</h1>

			</hgroup>
	
			<nav role="navigation">
							
				<ul id="cwd_navigation" class="column grid_12">
					
					<?php wp_nav_menu(array(
						'theme_location'	=> 'primary',
						'fallback_cb'		=> 'cwd_fallback_menu',
						'items_wrap'		=> '%3$s'
					)); ?>
				
				</ul>
			
			</nav>
		
		</section>
		
	</header>
