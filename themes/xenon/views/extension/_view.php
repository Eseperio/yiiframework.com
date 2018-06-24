<?php

/** @var $model app\models\Extension the data model */

use yii\helpers\Html;
use yii\helpers\Inflector;

/** @var $key mixed the key value associated with the data item */
/** @var $index integer the zero-based index of the data item in the items array returned by dataProvider. */
/** @var $widget yii\widgets\ListView the widget instance */

$extName = Inflector::camel2words(str_ireplace('yii2', '', $model->name))
?>
<div class="extension-box">
    <div class="extension-content">
        <h2 class="title"><?= Html::a(Html::encode($extName), $model->url) ?></h2>
        <h3 class="real-title"><?= Html::a(Html::encode($model->name), $model->url) ?></h3>

        <div class="extension-tagline">
            <?= Html::encode($model->tagline) ?>
        </div>

        <div class="extension-author">
            By <?= $model->getOwnerLink() ?>,
            <?php
            $created = Yii::$app->formatter->asRelativeTime($model->created_at);
            $updated = Yii::$app->formatter->asRelativeTime($model->updated_at);
            if ($created !== $updated && $model->updated_at !== null) {
                echo "$created, updated $updated.";
            } else {
                echo "$created.";
            }
            ?>
        </div>
    </div>
    <div class="extension-stats">
        <div class="stat-cell">
            <?= Html::encode($model->category->name) ?>
        </div>

        <div class="stat-cell comments">
            <?= Html::a(
                '<i class="fa fa-comments-o"></i> ' . $model->comment_count,
                $model->getUrl('view', ['#' => 'comments']),
                [
                    'aria-label' => $model->comment_count . ' Comments',
                    'title' => $model->comment_count . ' Comments',
                ]
            ) ?>
        </div>

        <div class="stat-cell downloads"><?= Html::a(
                '<i class="fa fa-download"></i> ' . $model->download_count,
                $model->getUrl('view', ['#' => 'downloads']),
                [
                    'aria-label' => $model->download_count . ' Downloads',
                    'title' => $model->download_count . ' Downloads',
                ]
            ) ?></div>
    </div>


</div>


