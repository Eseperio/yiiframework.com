<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Report an Issue';
$this->params['breadcrumbs'][] = $this->title;
$this->context->sectionTitle = $this->title;

?>

<div class="container report">

    <div class="row">
        <div class="content">
            <div class="col-md-12">
                <div class="box bottom-space"><h3>Thanks for helping to make Yii better!</h3>

                    <p>To ensure the issue gets reported to the right place, you need to find out whether it is an issue
                        in the Yii framework
                        itself, or in one of the official extensions.</p>

                    <p>If you want to report a <b>security issue</b>, please consider contacting us privately so we can
                        fix it before the details
                        of the issue are publicly
                        disclosed. <?= Html::a('Go to the contact page!', Url::to(['site/security'])) ?></p>
                </div>
                <div class="box bottom-space">
                    <h2 class="margin-top-0"><span>Yii 2.0</span></h2>


                    <p class="text-center medium">General issues, that affect the Yii core framework, should be reported
                        on Github in the <a target="_blank" rel="noopener noreferrer"
                                            href="https://github.com/yiisoft/yii2/issues">yiisoft/yii2</a> repository.
                    </p>
                    <p class="text-center">
                        <a class="btn btn-lg btn-default github-btn"
                           href="https://github.com/yiisoft/yii2/issues/new"><i
                                    class="fa fa-github"></i><span>Report issue</span></a>
                    </p>
                </div>
                <div class="box bottom-space">
                    <h2 class="margin-top-0">Yii 2.0 Extensions</h2>


                    <p class="text-center medium">If the error or feature request is for one of the official extensions,
                        please select below:</p>

                    <div class="row extensions">
                        <?php

                        $extensions = [
                            'yii2-apidoc' => 'API Documentation Generator',
                            'yii2-authclient' => 'Auth client extension',
                            'yii2-bootstrap' => 'Bootstrap extension',
                            'yii2-composer' => 'Composer Installer',
                            'yii2-debug' => 'Debug Toolbar',
                            'yii2-elasticsearch' => 'Elasticsearch extension',
                            'yii2-faker' => 'Faker extension',
                            'yii2-gii' => 'Gii Code Generator',
                            'yii2-httpclient' => 'HTTP client',
                            'yii2-imagine' => 'Imagine extension',
                            'yii2-jui' => 'jQuery UI extension',
                            'yii2-mongodb' => 'Mongo DB extension',
                            'yii2-queue' => 'Queue extension',
                            'yii2-redis' => 'redis extension',
                            'yii2-smarty' => 'Smarty view renderer',
                            'yii2-shell' => 'Shell extension',
                            'yii2-sphinx' => 'Sphinx Search extension',
                            'yii2-swiftmailer' => 'Swiftmailer extension',
                            'yii2-twig' => 'Twig view renderer',
                        ];

                        $extensionColumns = array_chunk($extensions, 4, true);

                        foreach ($extensionColumns as $column) {

                            foreach ($column as $ext => $extName) {
                                echo '<div class="col-md-3 col-sm-6 col-xs-6"><ul>';
                                echo "<li><a href=\"https://github.com/yiisoft/{$ext}/issues/new\">{$extName}</a><span>yiisoft/{$ext}</span></li>\n";
                                echo '</ul></div>';
                            }

                        }
                        ?>
                    </div>

                    <p>For other extensions that are created by other users please check the extension page on where to
                        report issues.</p>

                    <p>If you are unsure whether the issue you want to report belongs to an extension or the framework,
                        just report it on the
                        <a href="https://github.com/yiisoft/yii2/issues/new">framework issue tracker</a>.<br/>We will
                        figure out where it belongs and move it later.</p>
                </div>
                <div class="box bottom-space">
                    <h2 class="margin-top-0">Yii 1.1</h2>
                    <p class="text-center medium">If you want to report a bug for Yii 1.1, please open an issue in the
                        <a target="_blank" rel="noopener noreferrer"
                           href="https://github.com/yiisoft/yii">yiisoft/yii</a> repository.</p>
                    <p class="text-center">
                        <a class="btn btn-lg btn-default github-btn" href="https://github.com/yiisoft/yii/issues/new"><i
                                    class="fa fa-github"></i> <span>Report issue</span></a>
                    </p>

                    <p class="text-center">
                        Please note that Yii 1.1 is in <a
                                href="<?= Yii::getAlias('@web/news/90/update-on-yii-1-1-support-and-end-of-life/') ?>">maintenance
                            mode</a>,
                        we will only accept security fixes and changes for compatibility with PHP 7.<br>Please consider
                        upgrading to Yii 2 instead.</p></div>
            </div>
        </div>
    </div>

</div>