<?php get_header(); 

// Template Name: Modelo Padrão

?>

<div class="box-warpper">
	<main>
		<div class="conteudo container">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
           		<h1><?php the_title(); ?></h1>
           		<p>Autor: <?php the_author(); ?></p>
				<p><?php the_content(); ?></p>
			<?php endwhile; else: ?>
				<p>não tem post publicado.</p>
			<?php endif; ?>
		</div>
	</main>
</div>

<?php get_footer(); ?>