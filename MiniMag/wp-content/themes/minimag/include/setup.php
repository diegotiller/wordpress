<?php
function dm_theme_styles(){
	//carregando o bootstrap
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	//carregando foha de estilo do template
	wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/template.css');

	//carregando os scripts
	//carregando bootstrap.js
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js');
	//carregando script próprio
	wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js');
}

function dm_after_setup(){
	//suporte a miniaturas
	add_theme_support("post-thumbnails");
	//suporte ao titulo	
	add_theme_support("title-tag");
	//suporte logo customizada
	add_theme_support("custom-logo");

	//menus
	register_nav_menu("primary", "Menu Primario");
	register_nav_menu("top", "Menu Superior");
}

function dm_widgets(){
	//registrando sidebar
	register_sidebar(array(
		'name' => 'Sidebar Lateral',
		'id' => 'dm_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Sidebar Radapé',
		'id' => 'dm_footersidebar',
		'description' => 'Sidebar Radapé',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
	));
}