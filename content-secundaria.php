<article class="noticiaSecundaria">
	<div class="miniatura">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
		</a>
	</div>
	<h1>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	<p><?php the_excerpt(); ?></p>
</article>