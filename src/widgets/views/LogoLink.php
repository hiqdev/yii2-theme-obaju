<?php

use yii\helpers\Html;

echo Html::beginTag('a', array_merge(['href' => $url], $options));
    echo Html::img($image, $imageOptions);
    printf('<img src="%s" %s>', $smallImage, Html::renderTagAttributes($smallImageOptions));
        echo Html::tag('span', $name, ['class' => 'sr-only']);
    echo '</img>';
echo Html::endTag('a');

?>
