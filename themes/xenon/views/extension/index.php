<?php

use yii\helpers\Html;

/** @var $dataProvider \yii\data\ActiveDataProvider */
/** @var $category \app\models\ExtensionCategory */
/** @var $version string */
/** @var $tag \app\models\ExtensionTag */


$this->title = 'Extensions';

$this->beginBlock('contentSelectors');
echo $this->render('partials/_versions', [
    'currentVersion' => $version,
    'category' => $category ? $category->id : null,
    'tag' => $tag,
]);
$this->endBlock();

?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2 col-lg-2">
            <?= $this->render('_sidebar', [
                'category' => $category ? $category->id : null,
                'tag' => $tag,
                'sort' => $dataProvider->sort,
                'version' => $version,
            ]) ?>
        </div>

        <div class="col-sm-9 col-md-10 col-lg-10" role="main">
            <div class="row">
                <div class="col-md-7">
                    <h1>Extensions
                        <small><?php
                            $parts = [];
                            if (!empty($category)) {
                                $parts [] = " in category " . Html::encode($category->name);
                            }
                            if ($tag !== null) {
                                $parts [] = ' tagged with "' . Html::encode($tag->name) . '"';
                            }
                            echo implode(', ', $parts);
                            ?></small>
                    </h1>
                </div>
                <?php if (empty($category) && empty($tag)): ?>
                    <div class="col-md-5">
                        <?= \app\widgets\SearchForm::widget([
                            'type' => \app\models\search\SearchActiveRecord::SEARCH_EXTENSION,
                            'version' => isset($version) ? $version : '2.0',
                            'placeholder' => 'Search Extensions…',
                        ]) ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php if (empty($category) && empty($tag)): ?>
            <?= $this->render('partials/_originSelector', ['official' => false]) ?>
                <div class="call2action">
                    <strong>Did you know?</strong> Now you can add extensions directly from Packagist.
                    <?= Html::a('Add yours now!',['/extension/create']) ?>
                </div>
            <?php endif; ?>

            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
                'itemOptions' => ['class' => 'col-xs-12 col-sm-6 col-lg-4'],
                'layout' => "{summary}\n<div class=\"row\">{items}</div>\n{pager}",
            ]) ?>

        </div>
    </div>
</div>