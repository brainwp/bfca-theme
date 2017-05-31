<?php
add_action( 'widgets_init', 'coletivo_sidebar_init' );
function coletivo_sidebar_init() {
	register_sidebar( 

		array(
		'name'          => 'Sidebar Pessoa Fisica',
		'id'            => 'sidebar-3',
		'description'   => 'Sidebar for template Pessoa Fisica',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		) );


}