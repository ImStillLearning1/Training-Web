<?php
    register_nav_menu('top-navi','Main menu');
    
    add_filter('nav_menu_css_class', 'nav_css_filter', 10, 1);
    
    function nav_css_filter($classes)
    {
        $classes = array('nav-item');
        
        return $classes;
    }

class Walker_Quickstart_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<li class='nav-item'><a href='%s'%s class='nav-link'>%s</a></li>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title
        );
    }

}

add_action('init','create_section1_post_type');
 
function create_section1_post_type()
{
    register_post_type('section1',array(
        'labels' => array(
            'name' => 'Zarządzanie treścią strony',
            'edit_item' => 'Edytuj sekcję'
        ),
        'menu_icon' => 'dashicons-forms',
        'show_ui' => true,
        'public' => true,
        'supports' => array('title','editor','custom-fields', 'thumbnail'),
        'rewrite' => array(
            'with_front' => false,
            'pages' => true
        ),
        'menu_position' => 5,
        'has_archive' => false,
    ));
}

