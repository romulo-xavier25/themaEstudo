<article class="noticiaDestaque">
	<div class="miniatura">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
		</a>
	</div>
	<h1>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h1>
	por <span><?php the_author_posts_link(); ?></span> em <span><?php the_category(' '); ?></span> <?php the_tags('Tags: ', ', '); ?>
	<p><?php echo get_the_date(); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>