<html>
<head>
	<!-- <title><?php wp_title(); ?></title> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- ładowanie js/css , wybieram potem lokalizację czy w hed czy w footer-->
	<?php wp_head(); ?>
</head>
<body>
        <!-- Ładowanie szablonu nagłówka -->
	<?php get_header(); ?>
  <section class="main-wrap">
		<section class="container">

			<?php 
				if ( have_posts()):
					while ( have_posts()): the_post();
				?>
			<article class="post-<?= the_ID() ?>">
				<?= the_post_thumbnail(); ?>
				<h2><?=the_title(); ?></h2>
				<author><?= the_author(); ?></author>
				<date><?= the_date(); the_time(); ?> </date>
				<description><?= the_content('więcej'); ?></description>
			</article>

		<?php
			endwhile;
			endif;
		?>

		</section>
	</section>
        <?php wp_pagenavi(); ?>
        
	<?php get_footer(); ?>
	<!-- ładowanie js/css -->
	<?php wp_footer(); ?>
</body>
</html>