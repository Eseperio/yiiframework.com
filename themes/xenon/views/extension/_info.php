<?php

use app\components\UserPermissions;
use yii\helpers\Html;

/** @var $model app\models\Extension the data model */
/** @var $extended bool */

?>

<div class="side-panel">
    <?= $this->render('_metadata.php', ['model' => $model, 'extended' => true]) ?>
</div>
<?php if ($model->hasApiDoc() || $model->hasGuideDoc()): ?>
    <div class="side-panel">
        <?= $model->hasGuideDoc() ? Html::a('Guide Documentation', $model->getUrl('doc', ['type' => 'guide'])) . '<br>' : '' ?>
        <?= $model->hasApiDoc() ? Html::a('API Documentation', $model->getUrl('doc', ['type' => 'api'])) . '<br>' : '' ?>
    </div>
<?php endif; ?>

<?php if (UserPermissions::canUpdateExtension($model)): ?>
    <div class="side-panel">
        <?= Html::a('Update Extension', ['extension/update', 'id' => $model->id],['class'=>'btn btn-primary btn-block']) ?><br>
        <?php if (!$model->from_packagist): ?>
            <?= Html::a('Manage Downloads', ['extension/files', 'id' => $model->id]) ?><br>
        <?php endif; ?>
        <?php if ($model->from_packagist): ?>
            <?= Html::a('Update Packagist Data', ['extension/update-packagist', 'id' => $model->id], ['data-method' => 'post']) ?>
            <br>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if ($model->from_packagist): ?>
    <?= Html::a('Packagist Profile', $model->packagist_url, ['target' => '_blank', 'rel' => 'noopener noreferrer']) ?>
    <br>
<?php endif; ?>
<?php if ($model->github_url): ?>
    <?= Html::a(strpos($model->github_url, 'github.com/') !== false ? 'Github Repository' : 'Code Repository', $model->github_url, ['target' => '_blank', 'rel' => 'noopener noreferrer']) ?>
    <br>
<?php endif; ?>


<?php
$downloads = $model->getDownloads()->latest()->limit(3)->all();
if (!empty($downloads)): ?>
    <div class="side-panel">
        <h3 class="side-title">Downloads</h3>

    <ul>
        <?php foreach ($downloads as $download) {
            echo Html::tag('li', Html::a(Html::encode($download->file_name), $model->getUrl('download', ['filename' => $download->file_name])));
        } ?>
    </ul>

    <?= Html::a('show all', ['extension/files', 'id' => $model->id]) ?>
    </div>


<?php endif; ?>

<?php $related = $model->getRelatedExtensions() ?>
<?php if (!empty($related)): ?>

   <div class="side-panel"> <h3 class="side-title">Related Extensions</h3>

    <ul>
        <?php foreach ($related as $extension) {
            echo "<li>" . Html::a(Html::encode($extension->getLinkTitle()), $extension->getUrl()) . '</li>';
        } ?>
    </ul></div>
<?php endif; ?>
