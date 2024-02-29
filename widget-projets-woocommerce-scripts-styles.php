<?php
class Widget_Projets_WooCommerce_Scripts_Styles {

    public function __construct() {
        
        add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'enqueue_styles' ] );
        add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
    }

    public function enqueue_styles() {
        wp_enqueue_style( 'widget-projets-woocommerce-style', plugin_dir_url( __FILE__ ) . 'assets/style.css' );
    }

    public function enqueue_scripts() {
        wp_enqueue_script( 'widget-projets-woocommerce-script', plugin_dir_url( __FILE__ ) . 'assets/script.js', [ 'jquery' ], '1.0', true );
    }
}

new Widget_Projets_WooCommerce_Scripts_Styles();
