<?php
if (!defined('ABSPATH')) {
    exit;
}

function create_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => 'Portfolios',
                'singular_name' => 'Portfolio',
                'add_new' => 'Ajouter un projet',
                'add_new_item' => 'Ajouter un nouveau projet',
                'edit_item' => 'Modifier le projet',
                'new_item' => 'Nouveau projet',
                'view_item' => 'Voir le projet',
                'search_items' => 'Rechercher des projets',
                'not_found' => 'Aucun projet trouvé',
                'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
                'all_items' => 'Tous les projets',
            ),
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true, // pour la compatibilité avec l'éditeur Gutenberg
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'portfolio'),
            'show_in_menu' => true, // Afficher le CPT dans le menu d'administration
            'show_ui' => true, // Assurer que l'interface admin est activée pour le CPT
        )
    );
}
add_action('init', 'create_portfolio_post_type');

add_action('init', 'create_portfolio_cpt');