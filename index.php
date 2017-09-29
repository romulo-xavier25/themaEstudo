<?php get_header(); ?>

<div class="box">
	<main>
		<section class="slider container">slider</section>
		<section class="servicos container">serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="sidebar col-md-3">sidebar</aside>
				<div class="noticias col-md-9">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                		<h1><?php the_title(); ?></h1>
						<p>Publicado em: <?php echo get_the_date(); ?> por <?php the_author(); ?> </p>
						<p>Categorias <?php the_category(' '); ?></p>
						<p><?php the_tags('Tags: ', ', '); ?></p>
						<p><?php the_content(); ?></p>
					<?php endwhile; else: ?> 
						<p>não tem post publicado.</p>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="mapa container">mapa</section>
	</main>
</div>


<?php get_footer(); ?>