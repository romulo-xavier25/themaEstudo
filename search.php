<?php get_header(); ?>

<div id="primary" class="">
	<main id="primary">
		<div class="container">
			<?php

				while (have_posts()): the_post();

					get_template_part('content', 'search');

				endwhile;

			?>
		</div>
	</main>
</div>

<?php get_footer(); ?>
