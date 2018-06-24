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
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            The Yii community has developed a great amount of extensions that
                            provide a lot of useful functionality.
                        </p>
                        <ul>
                            <li>The extensions you find here are <strong>user contributed extensions</strong>.</li>
                            <li>There is also a set of extensions maintained by the Yii team,
                                we call these <?= Html::a('official extensions', ['extension/official']) ?>.
                            </li>
                        </ul>


                    </div>
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