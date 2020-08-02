<?php get_header(); //home pertenecea a la pagina blog?>



	<main class="pagina seccion no-sidebars contenedor">

			<?php 
				$autor = get_queried_object();


				//echo "<pre>";
				//var_dump($categoria->data->display_name);
				//echo "</pre>";


			?>

			<h2 class="text-center texto-primario">Author :<?php echo $autor->data->display_name; ?></h2>

			<p class="text-center"><?php echo get_the_author_meta('description',$autor->data->ID);

			//esto lo encuentro en usuario / description en el escritorio de wordpress

			//y con get_author_meta lo llamo
			?></p>
		
			<ul class="listado-blog">
					
				<?php get_template_part('template-parts/loop-blog', 'blog');?>
			</ul>

	</main>



<?php get_footer();?>