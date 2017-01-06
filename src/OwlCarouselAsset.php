<?php

namespace hiqdev\themes\obaju;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Theme main asset bundle.
 */
class OwlCarouselAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/obaju/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/owl.carousel.css',
        'css/owl.theme.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/owl.carousel.min.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        JqueryAsset::class,
    ];
}
