<?php get_header(); 

// Template Name: Template Padrão

?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


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