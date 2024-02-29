<?php
class Widget_Projets_WooCommerce extends \Elementor\Widget_Base {

    public function get_name() {
        return 'widget_projets_woocommerce';
    }

    public function get_title() {
        return 'Projets WooCommerce';
    }

    public function get_icon() {
        return 'eicon-products';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function render() {
        include( plugin_dir_path( __FILE__ ) . 'templates/widget-content.php' );
    }

   
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widget_Projets_WooCommerce() );
