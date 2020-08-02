
<?php get_header();?>


	<main class="contenedor pagina seccion con-sidebar">
		<div class="contenido-principal">

			<?php while(have_posts()): the_post(); ?>
			<h1 class="text-center texto-primario"><?php the_title();?></h1>

			<?php 
				if(has_post_thumbnail()):
					//con la imagen destacada le doy una clase a la imagen del blog o al page.php
					the_post_thumbnail('mediano',array('class'=>'imagen-destacada'));
				endif;


			?>

			<?php the_content();?>

			<?php endwhile;?>

			
		</div>
		<?php get_sidebar();?>
	</main>

<?php get_footer();?>