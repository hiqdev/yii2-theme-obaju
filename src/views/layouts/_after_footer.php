<?php

use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;

?>
<!-- *** COPYRIGHT *** -->
<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">
                &copy; <?= CopyrightYears::widget() ?>. <?= OrganizationLink::widget() ?>
                <?= Yii::t('hiqdev:themes:flat', 'All rights reserved.') ?>
            </p>

        </div>
        <div class="col-md-6">
            <p class="pull-right">

            </p>
            <p class="pull-right">Template by <a
                    href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
            </p>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END *** -->
