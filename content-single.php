<article>
	<header>
		<h1><?php the_title(); ?></h1>
		<p>Publicado por <?php the_author_posts_link(); ?> em <?php echo get_the_date(); ?></p>
		<p><span><?php the_category(' '); ?></span> <?php the_tags('Tags: ', ', '); ?></p>
	</header>

	<div class="content">
		<?php the_content(); ?>
	</div>
</article>