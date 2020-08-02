<?php
//cantidad para que no me de ningun valor
	function gymfitness_lista_clase($cantidad = -1){ ?>
	
	<ul class="lista-clases">
		
		<?php

			$args = array(
				'post_type' => 'gymfitness_clases', //me tengo que fijar que titulo tiene en el plugin
				'post_per_page' => $cantidad, //-1 o 1000 traigo todos los post
				'order_by' => 'title' //lo ordeno por ttulo pero tambien los puedo ordenar por fecha 
				//wordpress por default te ordena todo pero de manera descendente



			);

			$clases = new WP_Query($args);
			while($clases->have_posts()): $clases->the_post();?>

				<li class="clase card gradient">
					<?php the_post_thumbnail('mediano');?>
					<div class="contenido">

							<a href="<?php the_permalink?>">
								
								<h3><?php the_title();?></h3>

							</a>
							
							<?php 

								$hora_inicio = get_field('hora_inicio');
								$hora_fin = get_field('hora_inicio_copy');



							?>

					<p><?php the_field('dias_clase');?> - <?php echo $hora_inicio . " - " . $hora_fin ?></p>
					</div>
				</li>


			<?php endwhile; wp_reset_postdata();?>


	</ul>

<?php 

 }