<?php

use yii\helpers\Html;

print Html::beginTag('a', ['href' => $url]);
print Html::img($image, $options);
print Html::beginTag('img', array_merge(['src' => $smallImage], $smallImageOptions));
print Html::tag('span', $name, ['class' => 'sr-only']);
print Html::endTag('img');
print Html::endTag('a');

?>
