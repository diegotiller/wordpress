<?php 
// Função que carrega os estilos e scripts da pagina
function ds_theme_styles(){
	//carregando o bootstrap
	wp_enqueue_style("bootstrap", get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css");
	//carregando font-awesome
	wp_enqueue_style("fontawesome", get_template_directory_uri()."/vendor/font-awesome/css/font-awesome.min.css");
	//carregando font do google
	wp_enqueue_style("googlefontlora", "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic");
	//carregando open-sans
	wp_enqueue_style("googleopensans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
	//carregando o clean-blog
	wp_enqueue_style("cleanblog", get_template_directory_uri()."/css/clean-blog.min.css");

	//registrando os JavaScript
	//carregando o jQuery
	wp_enqueue_script("jquery", get_template_directory_uri()."/vendor/jquery/jquery.min.js");
	//carregando o bootstrap bundle
	wp_enqueue_script("bootstrap_js", get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.bundle.min.js");
	//carregando o Clean Blog 
	wp_enqueue_script("cleanblog_js", get_template_directory_uri()."/js/clean-blog.min.js");
}

// 
function ds_after_setup(){
	// Habilitando suporte ao título do site
	add_theme_support('title-tag');
	// Registrando menu
	//register_nav_menu("primary", "Menu Primário");
	// Registrando menu com tradução
	register_nav_menu("primary", __('Primary Menu', 'segundotheme'));
	// Habilitando suporte a logo
	add_theme_support('custom-logo');
	// Habilitando miniaturas no tema
	add_theme_support('post-thumbnails');
}