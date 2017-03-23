


        <!-- Ładowanie szablonu nagłówka -->
	<?php get_header(); ?>
        <?php the_post(); ?>

        <h1>post numer 4</h1>
	<section>
		<h1><?php echo the_title(); ?></h1>
		<div><?= the_content(); ?></div>
	</section>

        <!-- Ładowanie szablonu stopki -->
	<?php get_footer(); ?>
