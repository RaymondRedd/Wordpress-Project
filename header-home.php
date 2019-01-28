<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="container">

<header class="site-header">
	<div class="logo">
		<?php the_custom_logo(); ?>
	</div>
	<div class="hd-search">
		<?php get_search_form(); ?>
	</div>


	<nav class="site-nav">

		<?php 

		$args = array(
			'theme_location' => 'primary'
		);

		?>


		<?php wp_nav_menu(  $args) ?>
	</nav>
</header>

