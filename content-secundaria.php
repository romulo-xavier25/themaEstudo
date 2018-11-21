<article class="noticiaSecundaria">
	<div class="miniatura">
		<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
	</div>
	<h1><?php the_title(); ?></h1>
	<p><?php the_excerpt(); ?></p>
</article>