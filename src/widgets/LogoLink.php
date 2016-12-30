<?php

namespace hiqdev\themes\obaju\widgets;

class LogoLink extends \hiqdev\thememanager\widgets\LogoLink
{
    public $smallImage;

    public $smallImageOptions = [];

    protected function collectData()
    {
        return array_merge([
            'smallImage' => $this->getAssetImage($this->smallImage),
            'smallImageOptions' => $this->smallImageOptions,
        ], parent::collectData());
    }
}
