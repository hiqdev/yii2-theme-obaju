<?php

namespace hiqdev\themes\obaju\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class SocialShare extends Widget
{
    public $shareLink;

    protected $socials = [
        'facebook|facebook' => 'https://www.facebook.com/sharer/sharer.php?u=',
        'google-plus|gplus' => 'https://twitter.com/home?status=',
        'twitter|twitter' => 'https://plus.google.com/share?url=',
    ];

    public function init()
    {
        if (!$this->shareLink) {
            $this->shareLink = Yii::$app->request->absoluteUrl;
        }
    }

    public function run()
    {
        $out = '';
        foreach ($this->socials as $item => $url) {
            list($icon, $linkClass) = explode('|', $item);
            $out .= Html::a("<i class=\"fa fa-{$icon}\"></i>", implode('', [$url, $this->shareLink]), [
                'class' => 'external ' . $linkClass,
                'style' => 'opacity: 1;',
                'data-animate-hover' => 'pulse',
            ]);
        }

        return $out;
    }
}
