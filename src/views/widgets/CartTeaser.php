<?php

/** @var object $cart */
/** @var object $widget */

use yii\helpers\Html;

?>
<div class="navbar-collapse collapse right" id="basket-overview">
    <a href="<?= $widget->module->createUrl() ?>" class="btn btn-primary navbar-btn">
        <i class="fa fa-shopping-cart"></i>
        <?= Html::tag(
            'span',
            Yii::t('hiqdev:themes:obaju', '{n,plural,=0{0 items in cart} =1{# item in cart } other{# items in cart}}', ['n' => count($cart->positions)]),
            ['class' => 'hidden-sm']
        ) ?>
    </a>
</div>
