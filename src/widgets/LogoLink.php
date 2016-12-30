<?php

namespace hiqdev\themes\obaju\widgets;

class LogoLink extends \hiqdev\thememanager\widgets\LogoLink
{
    public $smallImage;

    public $imageOptions = [];

    public $smallImageOptions = [];

    protected function collectData()
    {
        return array_merge([
            'imageOptions' => $this->imageOptions,
            'smallImage' => $this->getAssetImage($this->smallImage),
            'smallImageOptions' => $this->smallImageOptions,
        ], parent::collectData());
    }
}
