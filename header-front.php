<!DOCTYPE html>
<html>
<head>
	
	<?php wp_head();?>
</head>
<body <?php body_class();?>>

		<header class="site-header">
			<div class="contenedor header-grid">
				<div class="barra-navegacion">
					<div class="logo">
						<a href="<?php echo site_url('/')?>">
						<img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="sitio logo" >
						</a>
					</div>
					
					<?php

						$args = array(
							//le tengo que decir que menu le quiero mostrar 
							'theme_location' => 'menu-principal' ,
							'container' =>'nav',
							'container_class' => 'menu-principal'

						);

						wp_nav_menu($args);


					?>

				</div><!-- barra de navegacion-->
				<div class="tagline text-center">
					<h2><?php the_field('encabezado_hero');?></h2>
					<p><?php the_field('contenido_hero')?></p>
				</div>
			</div>
		</header>