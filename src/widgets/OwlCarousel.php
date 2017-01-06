<?php

namespace hiqdev\themes\obaju\widgets;

use hiqdev\themes\obaju\OwlCarouselAsset;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\JsExpression;
use yii\web\View;

class OwlCarousel extends Widget
{
    /**
     * Items (div, a, img, span, li etc.)
     * @var array
     */
    public $items = [];

    /**
     * Container element (div, ul etc.)
     * @var string
     */
    public $containerTag = 'div';

    /**
     * Call the plugin function and your carousel is ready.
     * @var string
     */
    public $pluginInit = '$(".owl-carousel").owlCarousel();';

    /**
     * Only the class owl-carousel is mandatory to apply proper styles
     * NOTE: The owl-theme class is optional, but without it, you will need to style navigation features on your own.
     * @var array
     */
    protected $defaultContainerOptions = ['class' => 'owl-carousel owl-theme'];

    public $containerOptions = [];

    public function run()
    {
        $this->initCarouselJs();
        $out = Html::beginTag($this->containerTag, array_merge($this->containerOptions, $this->defaultContainerOptions));
        foreach ($this->items as $item) {
            $out .= $item;
        }
        $out .= Html::endTag($this->containerTag);

        return $out;
    }

    public function initCarouselJs()
    {
        OwlCarouselAsset::register($this->view);
        $this->view->registerJs(new JsExpression($this->pluginInit), View::POS_READY);
    }
}
