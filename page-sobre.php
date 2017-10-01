<?php get_header(); ?>

<div class="box">
	<main>
		<section class="meio container">
			<div class="noticias">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
               		<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				<?php endwhile; else: ?> 
					<p>não tem post publicado.</p>
				<?php endif; ?>
			</div>
		</section>
	</main>
</div>


<?php get_footer(); ?>