<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Home | Tranning Wordpress</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<header class="c-header">
	<div class="l-container">
		<div class="c-header__top">
			<div class="logo">
				<a href="<?php bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="税理士法人下平会計事務所"></a>
			</div>
			<div class="contact">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hed_tel.png" alt=""><br/>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hed_con_no.png" alt="" class="js-imglink">
			</div>
		</div>
	<nav class="c-gnav">
		<?php wp_nav_menu( 
			array( 
				'theme_location' => 'gnav', 
				'container' => 'false', 
				'menu_id' => '', 
				'menu_class' => ''
			) 
		); ?>
	</nav>
	
	</div>
</header>