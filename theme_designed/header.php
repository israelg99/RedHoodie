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
			<div id="h-image"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.skilledsoldiers.com/FPS/e107_plugins/aacgc_gamelist/icons/BF3_1.png" alt="bf3" /></a></div>
			<!-- Good Gamer Logos
			http://koolsource.com/uploads/25b9a4819465c86bd635f82c397d5a20.png 
			http://myona.com/wp-content/uploads/2011/09/Battlefield_3.png
			http://zobra.ru/uploads/games/p816/battlefield_3_icon_by_alucryd-d3ipbsm.png
			http://icons.iconarchive.com/icons/zakafein/game-pack-1/256/Battlefield-3-icon.png -->
			
			<div id="h-title" class="low-whiteglow"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div id="h-desc" class="redglow"><?php bloginfo( 'description' ); ?><span class="low-redglow"></span></div>
		</div>
		
		<div id="menu">
			<?php wp_list_pages('title_li=<div></div>'); ?>
		</div>