<?php

use hiqdev\pnotify\Flashes;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

Yii::$app->get('themeManager')->registerAssets();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= Flashes::widget() ?>

<?= $this->render('//layouts/_header') ?>
<?= $this->render('//layouts/_after_header') ?>

<div id="all">

    <div id="content">
        <?php if (Yii::$app->themeManager->isHomePage()) : ?>
            <?= $content ?>
        <?php else: ?>
            <div class="container">
                <div class="col-sm-12">
                    <?= Breadcrumbs::widget() ?>
                </div>

                <?= $content ?>

            </div>
        <?php endif ?>
    </div>

    <?= $this->render('//layouts/_footer') ?>
    <?= $this->render('//layouts/_after_footer') ?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
