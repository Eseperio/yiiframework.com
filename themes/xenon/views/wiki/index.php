<?php

use yii\helpers\Html;

/** @var $dataProvider \yii\data\ActiveDataProvider */
/** @var $category \app\models\WikiCategory */
/** @var $tag \app\models\WikiTag */
/** @var $version string */


if ($category !== null) {
    $this->title = $category->name;
} else {
    $this->title = 'Wiki';
}

$this->beginBlock('contentSelectors');
echo $this->render('partials/_versions', [
    'currentVersion' => $version,
    'category' => $category,
    'tag' => $tag,
]);
$this->endBlock();

?>
<div class="container guide-view lang-en" xmlns="http://www.w3.org/1999/xhtml">
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
                <div class="col-md-<?= (empty($category) && empty($tag)) ? 7 : 12 ?>">
                    <h1>Wiki articles
                        <small><?php
                            if (!empty($category)) {
                                echo " in category " . Html::encode($category->name);
                            }
                            if ($tag !== null) {
                                echo ' tagged with "' . Html::encode($tag->name) . '"';
                            }
                            ?></small>
                    </h1>
                </div>
                <?php if (empty($category) && empty($tag)): ?>

                    <div class="col-md-5">

                        <?php
                        echo \app\widgets\SearchForm::widget([
                            'type' => \app\models\search\SearchActiveRecord::SEARCH_WIKI,
                            'version' => isset($version) ? $version : '2.0',
                            'placeholder' => 'Search Wiki…',
                        ]);

                        ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="wiki-call2action call2action">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Your knowledege can help other users</h3>
                        <p>Maybe you have been struggled with some code and have found
                            a clever solution. You can create a wiki article with your solution so other users
                            can make better apps.
                        </p>
                    </div>
                </div>
            </div>


            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_view',
            ]) ?>

        </div>
    </div>
</div>