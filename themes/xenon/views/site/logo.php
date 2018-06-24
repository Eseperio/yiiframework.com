<?php
/* @var $this yii\web\View */
?>
<div class="container style_external_links">
    <div class="content box bottom-space text-center">
        <div>
            <h2>Logo for light backgrounds</h2>
            <p>Transparent background, 725 x 149 px.</p>

            <div class="logo-download-light">
                <img src="<?= Yii::getAlias('@web/image/yii_logo_light.svg') ?>" height="130"
                     title="Yii logo for light backgrounds" alt="Yii logo for light backgrounds">
            </div>
            <p>Download: <a href="<?= Yii::getAlias('@web/image/yii_logo_light.svg') ?>">SVG version</a>, <a
                        href="<?= Yii::getAlias('@web/image/yii_logo_light.png') ?>">PNG version</a></p>
        </div>
        <hr>
        <div class="">
            <h2>Logo for dark backgrounds</h2>
            <p>Transparent background, 725 x 149 px.</p>


            <div class="logo-download-dark ">
                <img class="bg-dark" src="<?= Yii::getAlias('@web/image/yii_logo_dark.svg') ?>" height="130"
                     title="Yii logo for dark backgrounds" alt="Yii logo for dark backgrounds">
            </div>

            <p>Download: <a href="<?= Yii::getAlias('@web/image/yii_logo_dark.svg') ?>">SVG version</a>, <a
                        href="<?= Yii::getAlias('@web/image/yii_logo_dark.png') ?>">PNG version</a></p>
        </div>


        <p class="alert alert-info">
            The logo is licensed under a <a href="http://creativecommons.org/licenses/by-nd/3.0/">Creative Commons
                Attribution-No
                Derivative Works 3.0 Unported License</a>.
        </p>
    </div>
</div>
