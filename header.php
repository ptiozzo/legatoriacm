<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title>
			<?php

			if (!is_front_page()){
				wp_title('');
				echo " | ";
				bloginfo('name');
			} else {
				bloginfo('name');
				echo " | ";
				bloginfo( 'description' );
			}
			?>

		</title>

		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="title" content="<?php bloginfo( 'name' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" type="image/png" href="">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<header class="pt-3 bg-grigio-scuro">
		<div class="container">
			<nav class="navbar navbar-expand-xs justify-content-end">
				<p class="text-white navbar-brand m-0 mr-2">Chiamaci: <span class="header_tel">011 336543</span></p>
				<?php
					wp_nav_menu([
						'menu'            => 'menu-social',
						'theme_location'  => 'menu-social',
						'container'       => '',
						'container_id'    => 'bs4navbar_social',
						'container_class' => '',
						'menu_id'         => false,
						'menu_class'      => 'nav',
						'depth'           => 0,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
					]);
				 ?>
			</nav>
		</div>
	</header>
	<header class="pb-3 sticky-top bg-grigio-scuro">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrincipale" aria-controls="navbarPrincipale" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse justify-content-end" id="navbarPrincipale">
					<?php
				    wp_nav_menu([
				      'menu'            => 'menu-principale',
				      'theme_location'  => 'menu-principale',
				      'container'       => '',
				      'container_id'    => 'bs4navbar_principale',
				      'container_class' => '',
				      'menu_id'         => false,
				      'menu_class'      => 'nav text-white',
				      'depth'           => 0,
				      'fallback_cb'     => 'bs4navwalker::fallback',
				      'walker'          => new bs4navwalker()
				    ]);
				   ?>
			  </div>
			</div>
		</nav>
	</header>
