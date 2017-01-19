<?php

namespace hiqdev\themes\obaju\widgets;

class BannerCarousel extends OwlCarousel
{
    public $containerOptions = ['id' => 'main-slider'];

    public function getPluginInit()
    {
        return "
        $('#main-slider').owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            stopOnHover: true,
            singleItem: true,
            afterInit: ''
        });
        ";
    }
}
