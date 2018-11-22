<article class="post-format-image">
	<h1 class="vermelho">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_content(); ?></p>
</article>