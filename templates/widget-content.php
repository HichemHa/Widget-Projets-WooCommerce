<?php

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
);

$products = wc_get_products( $args );

foreach ( $products as $product ) {
    // print_r($products);
    echo '<div class="product">';
    echo '<h2>' . $product->get_name() . '</h2>';
    echo '<p>' . $product->get_description() .'</p>';
    echo '<p>Budget: ' . get_post_meta( $product->get_id(), 'budget', true ) . '</p>';
    echo '<p>Mission: ' . get_post_meta( $product->get_id(), 'mission', true ) . '</p>';
    echo '</div>';
}
