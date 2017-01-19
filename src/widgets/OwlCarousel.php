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

    public $formatter;

    /**
     * Container element (div, ul etc.)
     * @var string
     */
    public $containerTag = 'div';

    public $wrapperTag = 'div';

    /**
     * Only the class owl-carousel is mandatory to apply proper styles
     * NOTE: The owl-theme class is optional, but without it, you will need to style navigation features on your own.
     * @var array
     */
    protected $defaultContainerOptions = ['class' => 'owl-carousel owl-theme'];

    public $containerOptions = [];

    public function init()
    {
        if (is_callable($this->formatter)) {
            $this->items = array_map($this->formatter, $this->items, array_keys($this->items));
        }
    }

    public function run()
    {
        $this->initCarouselJs();
        $out = Html::beginTag($this->containerTag, array_merge($this->defaultContainerOptions, $this->containerOptions));
        foreach ($this->items as $item) {
            $out .= $item;
        }
        $out .= Html::endTag($this->containerTag);

        return $out;
    }

    /**
     * @return string
     */
    public function getPluginInit()
    {
        return '$(".owl-carousel").owlCarousel();';
    }

    protected function initCarouselJs()
    {
        OwlCarouselAsset::register($this->view);
        $pi = new JsExpression($this->getPluginInit());
        $this->view->registerJs($pi, View::POS_READY);
    }
}
