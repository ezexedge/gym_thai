		<?php while(have_posts()): the_post(); ?>
			<h1 class="text-center texto-primario"><?php the_title();?></h1>

			<?php 
				if(has_post_thumbnail()):
					//con la imagen destacada le doy una clase a la imagen del blog o al page.php
					the_post_thumbnail('mediano',array('class'=>'imagen-destacada'));
				endif;


			?>


			<?php 

			if(get_post_type() == 'gymfitness_clases'){

								$hora_inicio = get_field('hora_inicio');
								$hora_fin = get_field('hora_inicio_copy');

			?>

				<p class="informacion-clase"><?php the_field('dias_clase');?> - <?php echo $hora_inicio . " - " . $hora_fin ?></p>

			<?php } ?>

			<?php the_content();?>

			<?php endwhile;?>

			