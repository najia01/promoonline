<?php
/*
Plugin Name: My First Plugin
Description: Affiche les réseaux sociaux
Author: Najia
Version: 1.10.3

*/

require_once(plugin_dir_path(__FILE__) . 'includes/mfp-functions.php');


// FOR A MENU LINK //
function ajouter_menu_reseaux_sociaux() {
    add_menu_page(
        'Gérer les Réseaux Sociaux',
        'My First Plugin',
        'manage_options',
        'gestion-reseaux-sociaux',
        'page_gestion_reseaux_sociaux'
    );
}
add_action('admin_menu', 'ajouter_menu_reseaux_sociaux');


function afficher_icones_dans_footer() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'reseaux_sociaux';

    
    $icones = $wpdb->get_results("SELECT `icone_reseau_sociaux` FROM $table_name");

    if ($icones) {
        echo '<div class="footer-icons">';
        foreach ($icones as $icone) {
            // var_dump($icone->icone_reseau_sociaux); 
            echo '<i class="' . esc_attr($icone->icone_reseau_sociaux) . '" ></i>';

        }
        echo '</div>';
    }
}

add_action('wp_footer', 'afficher_icones_dans_footer');





