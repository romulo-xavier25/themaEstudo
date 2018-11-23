<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Curso WordPress</title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<header>
	<div class="barra-topo">
		<div class="container">
			<div class="row">
				<div class="redes-sociais col-md-9">redes sociais</div>
				<div class="pesquisa col-md-3 text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="area-menu">
		<div class="container">
			<div class="row">
				<div class="logo col-md-3">logo</div>
				<div class="menu-principal col-md-9 text-right">
					<?php wp_nav_menu(array('theme_location' => 'menu_topo')); ?>
				</div>
			</div>
		</div>
	</div>
</header>