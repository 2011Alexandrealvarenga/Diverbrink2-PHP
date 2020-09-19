<?php 
if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page();
  
}




//REGISTRAR MENU
function registrar_menu_navegacao(){
  register_nav_menu('header-menu','main-menu');
}
add_action('init','registrar_menu_navegacao');


//BANNER
function create_post_type(){
  register_post_type('banners',
    array(
      'labels' => array(
      'name' => __('Banners'),
      'singular_name'=> __('Banners')
      ),
      'supports' => array(
        'title', 'editor','thumbnail'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-images-alt2',
      'rewrite' => array('slug'=>'banners'),
    ));
}

add_action('init','create_post_type');



// DEFINIR AS MINIATURAS DOS POSTS
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,720,'true');//ajusta a imagem para post em rede sociais |true recorta a imagem

// REGISTRA O CUSTOM NAVIGATION WALKER
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// REGISTRAR OS MENUS
register_nav_menus( array(
  'principal'=>__('Menu Principal','diverbrink')
));



//GERA TITULO DA HEADER
function geraTitle(){

  if( is_home() ) {
    bloginfo('name');
  } else {
    bloginfo('name');
    echo ' | ';
    the_title();
  }
}



//BUSCA
register_sidebar(
  array(
    'name' => 'Busca',
    'id' => 'busca',
    'before_widget' => '<div class="blog-search ">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  ));
ADD_FILTER('excerpt_length',function($lenght){
  return 30;
})
 ?>