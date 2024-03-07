<?php

$args = array(
    'post_type'      => 'product',
    // 'posts_per_page' => 10,
);

$products = wc_get_products( $args );
?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
.text-projet{
    color: white;
}
.slick-track{
    height: 90vh;
    
}
.text-projet{
    display:flex;
    flex-direction:column;
    justify-content:space-around;
    height:100%;
    background: rgb(60,161,70);
    background: linear-gradient(90deg, rgba(60,161,70,1) 50%, rgba(60,161,70,0) 100%);
    
}

</style>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $(".carousel-class").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>


<?php
echo '<h1>Nos Réalisation</h1>';   
    echo '<div class="carousel-class">'; 
foreach ( $products as $product ) {
    $image = $product->get_image();
    $product_id = $product->get_id();
    $product_link = get_permalink($product_id);
    $image_url = get_the_post_thumbnail_url($product_id);
    echo '<div class="product-car" style=" background:url('. $image_url.');background-position:center;
    background-size:cover;
    background-repeat: no-repeat; ">';
        // echo '<div class="product-image">' . $image . '</div>';
        // print_r($products);
        echo '<div class="text-projet">';
        echo '<h2>' . $product->get_name() . '</h2>';
        echo '<p>' . $product->get_description() .'</p>';
        echo '<p>Budget: ' . get_post_meta( $product->get_id(), 'budget', true ) . '</p>';
        echo '<p>Mission: ' . get_post_meta( $product->get_id(), 'mission', true ) . '</p>';
        echo '</div>';
        echo '</div>';

        
}
echo '</div>';
