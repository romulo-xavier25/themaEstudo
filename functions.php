<?php
ob_start();

/* FUNÇÃO PARA CARREGAR OS ARQUIVOS JS E CSS */
function carrega_scripts(){
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', '1.0', array(), 'all');
    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', null, array(), true);
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', '4.0', array(), 'all');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', null, array('jquery'), true);
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', null, array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'carrega_scripts');



/* FUNÇÃO PARA CARREGAR OS MENUS */
register_nav_menus(
    array(
        'menu_topo' => 'Menu Principal',
        'menu_rodape' => 'Menu Rodape'
    )
);



function funcao_paginacao(){
global $wp_query;
$total = $wp_query->max_num_pages;
                  
if ( $total > 1 )  {
   if ( !$current_page = get_query_var('paged') )
       $current_page = 1;
                          
       $big = 999999999;

       $permalink_structure = get_option('permalink_structure');
       $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
       echo paginate_links(array(
           'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
           'format' => $format,
           'current' => $current_page,
           'total' => $total,
           'mid_size' => 4,
           'type' => 'plain'
       ));
   }
}
// fim da função da paginação

function novo_tamanho_do_resumo($length) {
return 20;
}
add_filter('excerpt_length', 'novo_tamanho_do_resumo');

remove_action('wp_head', 'wp_generator');