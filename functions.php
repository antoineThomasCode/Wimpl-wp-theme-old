<?php

function theme_support () {
    add_theme_support("title-tag");
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );
    register_nav_menu('header', 'En tête du menu');
};
add_action('after_setup_theme', 'theme_support');


function theme_register_assets () {
    // FontAwesome
    wp_enqueue_style('fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

    // Styles
    wp_enqueue_style('resetStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/base/_reset.css');
    wp_enqueue_style('toolsStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/base/_tools.css');
    wp_enqueue_style('variablesStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/abstracts/_variables.css');
    wp_enqueue_style('typographyStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/base/_typography.css');
    wp_enqueue_style('baseStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/base/_base.css');
    wp_enqueue_style('buttonsStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/components/_buttons.css');
    wp_enqueue_style('animationsStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/components/_animations.css');
    wp_enqueue_style('headerStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/layout/_header.css');
    wp_enqueue_style('footerStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/layout/_footer.css');
    wp_enqueue_style('homeStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/homepage.css');
    /*wp_enqueue_style('freelanceStyle', 'https://wimpl.tech/wp-content/themes/wimpl/css/pages/freelance.css');*/

    //Splide
    wp_enqueue_style('splideCss', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css");
    wp_enqueue_script('splideJs', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js');
    wp_enqueue_script('splideAutoscrollJS', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js');

    // Swiper
    wp_enqueue_style('swiperStyle', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");
    wp_enqueue_script( 'swiperJs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');

    // Scripts
    wp_enqueue_script('headerScript', 'https://wimpl.tech/wp-content/themes/wimpl/js/header.js');
    wp_enqueue_script('homeScript', 'https://wimpl.tech/wp-content/themes/wimpl/js/homepage.js');
};


add_action('wp_enqueue_scripts', "theme_register_assets");
add_action('init', 'theme_setup');
/*add_action( 'init', 'wpm_custom_post_type', 0 );*/


function add_module_to_my_script($tag, $handle, $src) {
    if ("headerScript" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    if ("homeScript" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}
add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);


/*function wpm_custom_post_type() {
    // Freelances
    $labels = array(
        'name'                => _x( 'Freelances', 'Post Type General Name'),
        'singular_name'       => _x( 'Freelance', 'Post Type Singular Name'),
        'menu_name'           => __( 'Freelances'),
        'all_items'           => __( 'Tous les freelances'),
        'view_item'           => __( 'Voir le freelance'),
        'add_new_item'        => __( 'Ajouter un nouveau freelance'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer le freelance'),
        'update_item'         => __( 'Modifier le freelance'),
        'search_items'        => __( 'Rechercher un freelance'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    $args = array(
        'label'               => __( 'Freelances'),
        'description'         => __( 'Tous sur les freelances'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-businessperson',
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'freelances'),

    );
    register_post_type( 'freelances', $args );

    // Offres
    $labels = array(
        'name'                => _x( 'Offres', 'Post Type General Name'),
        'singular_name'       => _x( 'Offre', 'Post Type Singular Name'),
        'menu_name'           => __( 'Offres'),
        'all_items'           => __( 'Toutes les offres'),
        'view_item'           => __( 'Voir l\'offre'),
        'add_new_item'        => __( 'Ajouter une nouvelle offre'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer l\'offre'),
        'update_item'         => __( 'Modifier l\'offre'),
        'search_items'        => __( 'Rechercher une offre'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __( 'Offres'),
        'description'         => __( 'Tous sur les offres'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-tickets-alt',
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'offres'),

    );
    register_post_type( 'offres', $args );
}*/