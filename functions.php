<?php   
function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(https://institutoedube.com.br/wp-content/themes/edube/imagens/logotipo-edube.svg);
    padding-bottom: 50px;
    width: 300px;
    height: auto;
    background-size: contain;
} 
</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );
function limit_words($string, $word_limit) {
    $words = explode(' ', $string);
    return implode(' ', array_slice($words, 0, $word_limit));
    }
add_theme_support( 'post-thumbnails' );
add_image_size('blog', 300, 220, true);
add_image_size('solucoes', 618, 441, true);
add_image_size('solucoes_mobile', 618, 341, true);
add_image_size('blog_mobile', 734, 369, true);
add_image_size('evidencias', 848, 300, true);
add_image_size('equipe', 460, 600, true);
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Menu Topo Site Provisório' ),
      'header-menu-valendo' => __( 'Menu Topo Site Final' ),
      'footer-menu' => __( 'Menu Rodapé' ),
      
      
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
// Load the theme stylesheets
function theme_styles()  
{ 
	// Example of loading a jQuery slideshow plugin just on the homepage
  //	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );
	// Load all of the styles that need to appear on all pages
	
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/estilo.min.css' );

  
	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	}
}
add_action('wp_enqueue_scripts', 'theme_styles');
function logotipo( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','logotipo');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_logotipo', 'logotipo');
function parceiros( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','parceiros');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_parceiros', 'parceiros');
function evidencias( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','evidencias');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_evidencias', 'evidencias');
function evidenciasblock( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','evidencias-block');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_evidenciasblock', 'evidenciasblock');
function solucoesloop( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','solucoes');
  
return ob_get_clean();
  
}
  
add_shortcode('solucoesloop', 'solucoesloop');

function eventos( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','eventos');
  
return ob_get_clean();
  
}
  
add_shortcode('eventosblock', 'eventos');

function equipeblock( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','equipe');
  
return ob_get_clean();
  
}
  
add_shortcode('equipeblock', 'equipeblock');
function diretoriablock( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','direcao');
  
return ob_get_clean();
  
}
  
add_shortcode('diretoriablock', 'diretoriablock');
function solucoesblocks( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','solucoes-blocks');
  
return ob_get_clean();
  
}
  
add_shortcode('solucoesblocks', 'solucoesblocks');
function noticiasblocks( $atts, $content = null ) {
  
  ob_start();
  
get_template_part('content','noticias');
  
return ob_get_clean();
  
}
  
add_shortcode('noticiasblocks', 'noticiasblocks');
function carousel1( $atts, $content = null ) {
  
  ob_start();
  
  get_template_part('content','carousel1');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_carousel1', 'carousel1');
function carousel2( $atts, $content = null ) {
  
  ob_start();
  
  get_template_part('content','carousel2');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_carousel2', 'carousel2');
function carousel3( $atts, $content = null ) {
  
  ob_start();
  
  get_template_part('content','carousel3');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_carousel3', 'carousel3');
function carouselmissao( $atts, $content = null ) {
  
  ob_start();
  
  get_template_part('content','carousel-missao');
  
  return ob_get_clean();
  
  }
  
add_shortcode('content_carouselmissao', 'carouselmissao');
if ( function_exists('register_sidebar') ) {
    $sidebar1 = array(
		
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Barra Lateral Evidencias', 'sidebarevidencias' ),  
    );  
    $sidebar2 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Barra Lateral Noticias', 'textdomain' ),  
    );
    $sidebar3 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Barra Lateral Busca', 'textdomain' ),  
    );
    $sidebar4 = array(
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',        
        'name'=>__( 'Barra Lateral Eventos', 'textdomain' ),  
    );
     
    register_sidebar($sidebar1);
    register_sidebar($sidebar2);
    register_sidebar($sidebar3);
    register_sidebar($sidebar4);
}
function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
  $return = array();
  if (class_exists('WPSEO_Primary_Term')){
      // Show Primary category by Yoast if it is enabled & set
      $wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
      $primary_term = get_term($wpseo_primary_term->get_primary_term());
      if (!is_wp_error($primary_term)){
          $return['primary_category'] = $primary_term;
      }
  }
  if (empty($return['primary_category']) || $return_all_categories){
      $categories_list = get_the_terms($post_id, $term);
      if (empty($return['primary_category']) && !empty($categories_list)){
          $return['primary_category'] = $categories_list[0];  //get the first category
      }
      if ($return_all_categories){
          $return['all_categories'] = array();
          if (!empty($categories_list)){
              foreach($categories_list as &$category){
                  $return['all_categories'][] = $category->term_id;
              }
          }
      }
  }
  return $return;
}
// split content at the more tag and return an array
function split_content() {
    global $more;
    $more = true;
    $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
    for($c = 0, $csize = count($content); $c < $csize; $c++) {
        $content[$c] = apply_filters('the_content', $content[$c]);
    }
    return $content;
}
  ?>