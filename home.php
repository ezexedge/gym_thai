<?php get_header(); //home pertenecea a la pagina blog?>



	<main class="pagina seccion no-sidebars contenedor">
		
			<ul class="listado-blog">
				<?php while(have_posts()): the_post();?>
				<?php get_template_part('template-parts/loop', 'blog');?>
				<?php endwhile;?>
			</ul>

	</main>



<?php get_footer();?>