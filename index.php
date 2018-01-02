<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="box">
	<main>
		<section class="slider container">slider</section>
		<section class="servicos container">serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="sidebar col-md-3">sidebar</aside>
				<div class="noticias col-md-9">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php get_template_part('content', get_post_format()); ?>
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