<?php

/*consutas reutilizables*/
require get_template_directory() . '/inc/queries.php';

require get_template_directory() . '/inc/shortcode.php';



	function gymfitness_setup(){
		add_theme_support('post-thumbnails');


		//titulos seo

		add_theme_support('title-tag');

		//agregaar imagenes de tmaño personalizada
		//el ultimo true es el que corta la imagen
		add_image_size('square',350,350,true);
		add_image_size('portrait',350,724,true);
		add_image_size('cajas',400,375,true);
		add_image_size('mediano',700,400,true);
		add_image_size('blog',966,644,true);




	}
	add_action('after_setup_theme','gymfitness_setup');

	function gymfitness_menus(){
			//de esta forma creo y registro los menus
		register_nav_menus(array(

				//esto lee wordpress     //y esto leo yo en el sito web como usuario //le paso gymfitnes por que debe hacer 																		referencia a un tema

				'menu-principal' => __('Menu principal', 'gymfitness')

		));
	}

	add_action('init','gymfitness_menus');

	//activo los stylos


	function gymfitness_scripts_styles(){
		wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css',array(),'8.0.1');

		wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

		wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );
//nosotros podemos verificar el nombre con el is_page
		//activado el slug desde la pagina de la cual yo
		//qiero cargar el archivo css
		//este if tambien se puede hacer con las llave {}
			if(is_page('galeria')):
			wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.0');
 
 			endif;

 			if(is_page('contacto')):
 				wp_enqueue_style('leafletCSS',"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css",array(),'1.5.1');
 			endif;

 			if(is_page('inicio')):
 				wp_enqueue_style('bxSliderCSS',"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css",array(),'4.2.12');
 			endif;

 		wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);



 		if(is_page('galeria')):
 		wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.0', true);
		endif;

		if(is_page('contacto')):
			wp_enqueue_script('leafletJS',"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js",array(),'1.5.1',true);
 			endif;

 			if(is_page('inicio')):
			wp_enqueue_script('bsxSliderJS',"https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js",array('jquery'),'4.2.12',true);
 			endif;


		wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),'1.0.0');

		
	    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);


	}


	add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');
//definimos los widget

	function gymfitness_widgets(){
		register_sidebar(array(
			'name' => 'Sidebar 1',
			'id' => 'sidebar_1',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' =>'<h3 class="text-center texto-primario">',
			'after_title' => '</h3>'
		));

		register_sidebar(array(
			'name' => 'Sidebar 2',
			'id' => 'sidebar_2',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
				'before_title' =>'<h3 class="text-center texto-primario">',
			'after_title' => '</h3>'
		));
	}

	add_action('widgets_init', 'gymfitness_widgets');

/*imagen hero*/

function gymfitess_hero_image(){
//obtener id de la pagina inicial
	$front_page_id = get_option('page_on_front');
	//obtener el id del imagen
	$id_imagen = get_field('imagen_hero', $front_page_id);

	//obtener la imagen esta funcion me devuelve un arreglo con 4 posicione
	//verificar y probar
	$imagen = wp_get_attachment_image_src($id_imagen,'full')[0];

	//style css lo agregamso a todo esto en un style
	wp_register_style('custom',false); //el false lo tiene por que no se le inyecta ningun archivo
	wp_enqueue_style('custom');

	$imagen_destacada_css = "
			body.home .site-header{
				background-image : linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)) ,url($imagen);

			}
	";

	wp_add_inline_style('custom',$imagen_destacada_css);

}

add_action('init','gymfitess_hero_image');