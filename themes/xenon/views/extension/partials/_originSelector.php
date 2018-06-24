<?php
use yii\helpers\Html;
/* @var $official boolean whether official link must be active */
?>

<div class="row">
    <div class="col-xs-12 text-center">
        <div class="btn-group author-selection">
            <?= Html::a('Made by Community', ['/extensions'],['class'=>'btn btn-default '.($official?:"active")]) ?>
            <?= Html::a('Official extensions', ['extension/official'],['class'=>'btn btn-default '.(!$official?:"active")]) ?>
        </div>
    </div>
</div>