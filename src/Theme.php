<?php

namespace hiqdev\themes\obaju;

class Theme extends \hiqdev\thememanager\Theme
{
    public $label = 'Obaju';

    public $description = 'Description';

    public $screenshot = '@hiqdev/themes/obaju/assets/obaju.jpg';

    public $assets = [
        Asset::class,
    ];
}
