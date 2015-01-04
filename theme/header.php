<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>

<body>
	<div id="wrapper">
	
		<div id="header">
			<div id="h-title" class="low-whiteglow"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div id="h-desc" class="redglow"><?php bloginfo( 'description' ); ?><span class="low-redglow"></span></div>
		</div>
		
		<div id="menu">
			<?php wp_list_pages('title_li=<div></div>'); ?>
		</div>