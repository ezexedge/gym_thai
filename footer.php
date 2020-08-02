
<footer class="site-footer contenedor">
	<hr>
	<div class="contenido-footer">

		<?php

						$args = array(
							//le tengo que decir que menu le quiero mostrar 
							'theme_location' => 'menu-principal' ,
							'container' =>'nav',
							'container_class' => 'menu-principal'

						);

						wp_nav_menu($args);


					?>
					<div class="copyright">Todos los derechos reservados . <?php echo get_bloginfo('name') . " " . date('Y');?></div>
		
	</div>
</footer>
	<?php wp_footer();?>
</body>
</html>