<?php 
// Estilos e scripts
function dp_theme_styles(){
	// Efileirando folhas de estilos do theme
	wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
	// Enfleirando scripts ao fim da pagina (no caso de scripts no topo só mudar para falde o 3° parâmetro)
	wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
}

// Suporte a menus
function dp_after_setup(){
	// Adicionando suporte a menus wordpress antigo (desnecessário as novas versões)
	add_theme_support('menus');
	// Adicionando miniaturas aos posts
	add_theme_support('post-thumbnails');
	// Dando permissão do wordpress criar a tag <title>
	add_theme_support('title-tag');
	// Adicionando suorte a logo customizada
	add_theme_support('custom-logo');
	// Registrando menus no thema
	register_nav_menu('primary', __('Primary Menu', 'primeiroprojeto'));
	register_nav_menu('footer', 'Menu Rodapé');
}

// Suporte a sidebar
function dp_widgets(){
	// Registrando sibebar no thema
	register_sidebar(array(
		// Informações que aparecem no painel administrativo
		'name' => __('Meu Primeiro Sidebar', 'primeiroprojeto'),
		'id' => 'dp_sidebar',
		'description' => __('Sidebar para o tema', 'primeiroprojeto'),
		// Modifica as tags padrõs dos títulos da sidebar (padrão é h2)
		'before_title' => '<h4 class="widgets_title">',
		'after_title' => '</h4>',
		// Subistituindo tags padrões do widget (padrão é li)
		// id="%1$s" coloca o id padrão do widget específico
		// class="%2$s" coloca o class padrão do widget específico 
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>'
	));
}