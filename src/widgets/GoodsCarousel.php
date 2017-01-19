<?php

namespace hiqdev\themes\obaju\widgets;

class GoodsCarousel extends OwlCarousel
{
    public $containerOptions = ['class' => 'product-slider owl-carousel owl-theme'];

    public function getPluginInit()
    {
        return "
        $('.product-slider').owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            afterInit: function() {
                $('.product-slider .item').css('visibility', 'visible');
            }
        });
        ";
    }
}
