<!DOCTYPE html>
<html>
<head>
	
	<?php wp_head();?>
</head>
<body>

		<header class="site-header">
			<div class="contenedor">
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

				</div>
			</div>
		</header>