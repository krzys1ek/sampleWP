<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- ładowanie js/css , wybieram potem lokalizację czy w hed czy w footer-->
	<?php wp_head(); ?>
</head>
<body>
        <!-- Ładowanie szablonu nagłówka -->
	<?php get_header(); ?>
        <?php the_post(); ?>
        <h1> Witaj na mojej stronie </h1>
        
	<section>
		<h1><?php echo the_title(); ?></h1>
		<div><?= the_content(); ?></div>
	</section>

        <!-- Ładowanie szablonu stopki -->
	<?php get_footer(); ?>
	<!-- ładowanie js/css -->
	<?php wp_footer(); ?>
</body>
</html>