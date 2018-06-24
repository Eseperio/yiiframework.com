<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="error-wrapper">
    <div class="container error-container">
        <div class="row">
            <div class="col-md-6">
                <div class="status-code"><?= Yii::$app->response->statusCode ?></div>
            </div>
            <div class="col-md-6">
                <div class="site-error content box">
                    <h1 class="margin-top-0"><?= Html::encode($this->title) ?></h1>
                    <div class="error-description"> <?= nl2br(Html::encode($message)) ?></div>
                    <hr>
                    <div class="links">
                        <h4>You may find what you search here:</h4>
                        <?= Html::a('Guide', ['/doc/guide'], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Api', ['/doc/api'], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Wiki', ['/wiki'], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Extensions', ['/extensions'], ['class' => 'btn btn-primary']) ?>
                    </div>
                    <hr>
                    <div class="error-notes"><p>
                            The above error occurred while the Web server was processing your request.
                        </p>
                        <p>
                            Please <?= Html::a('contact us', Url::to(['site/contact'])) ?> if you think this is a server
                            error.
                            Thank you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
