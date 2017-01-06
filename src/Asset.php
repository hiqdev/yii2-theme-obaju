<?php

namespace hiqdev\themes\obaju;

use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/obaju/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        '//fonts.googleapis.com/css?family=Roboto:400,500,700,300,100',
        'css/font-awesome.css',
        'css/animate.min.css',
        'css/style.default.css',
        'css/custom.css',
    ];

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/respond.min.js',
        'js/jquery.cookie.js',
        'js/waypoints.min.js',
        'js/modernizr.js',
        'js/bootstrap-hover-dropdown.js',
        'js/front.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        BootstrapPluginAsset::class,
    ];
}
