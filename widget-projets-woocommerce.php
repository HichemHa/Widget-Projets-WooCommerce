<?php
/*
Plugin Name: Widget Projets WooCommerce
Description: test
Version: 1.0
Author: Hichem hanafi
*/

add_action( 'elementor/widgets/widgets_registered', 'widget_projets_woocommerce_init' );

function widget_projets_woocommerce_init() {
    include_once( plugin_dir_path( __FILE__ ) . 'widget-projets-woocommerce-widget.php' );
    include_once( plugin_dir_path( __FILE__ ) . 'widget-projets-woocommerce-scripts-styles.php' );
}


function add_budget_mission_fields() {
    woocommerce_wp_text_input(
        array(
            'id'          => 'budget',
            'label'       => __('Budget', 'widget-projets-woocommerce'),
            'desc_tip'    => 'true',
            'description' => __('Entrez le budget pour ce projet.', 'widget-projets-woocommerce'),
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => 'mission',
            'label'       => __('Mission', 'widget-projets-woocommerce'),
            'desc_tip'    => 'true',
            'description' => __('Entrez la mission pour ce projet.', 'widget-projets-woocommerce'),
        )
    );
}

add_action('woocommerce_product_options_general_product_data', 'add_budget_mission_fields');

function save_budget_mission_fields($post_id) {
    $budget = isset($_POST['budget']) ? sanitize_text_field($_POST['budget']) : '';
    $mission = isset($_POST['mission']) ? sanitize_text_field($_POST['mission']) : '';

    update_post_meta($post_id, 'budget', $budget);
    update_post_meta($post_id, 'mission', $mission);
}

add_action('woocommerce_process_product_meta', 'save_budget_mission_fields');
