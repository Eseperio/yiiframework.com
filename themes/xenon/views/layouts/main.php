<?php

use app\controllers\BaseController;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;

\app\themes\xenon\assets\XenonThemeAsset::register($this);

/* @var $this \yii\web\View */
/* @var $content string */

$this->registerLinkTag([
    'rel' => 'search',
    'type' => 'application/opensearchdescription+xml',
    'title' => 'Yii Search',
    'href' => Url::toRoute(['search/opensearch-description']),
]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= Yii::getAlias('@web/favico/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= Yii::getAlias('@web/favico/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= Yii::getAlias('@web/favico/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= Yii::getAlias('@web/favico/manifest.json') ?>">
    <link rel="mask-icon" href="<?= Yii::getAlias('@web/favico/safari-pinned-tab.svg') ?>" color="#2b5797">
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web/favico/favicon.ico') ?>">
    <meta name="msapplication-config" content="<?= Yii::getAlias('@web/favico/browserconfig.xml') ?>">
    <meta name="theme-color" content="#ffffff">

    <link href="<?= Url::to(['rss/all'], true) ?>" type="application/rss+xml" rel="alternate"
          title="Lives News for Yii Framework">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?= Html::csrfMetaTags() ?>
    <?php $this->registerJs('yiiBaseUrl = ' . \yii\helpers\Json::htmlEncode(Yii::$app->request->getBaseUrl()), \yii\web\View::POS_HEAD); ?>

    <title><?php
        $title = [];
        if (!empty($this->title)) {
            $title[] = $this->title;
        }
        if ($this->context instanceof BaseController) {
            if ($this->context->headTitle !== null) {
                $title[] = $this->context->headTitle;
            } elseif ($this->context->sectionTitle !== null) {
                if (is_array($this->context->sectionTitle)) {
                    foreach (array_reverse($this->context->sectionTitle) as $name => $url) {
                        $title[] = $name;
                    }
                } else {
                    $title[] = $this->context->sectionTitle;
                }
            }
        }
        $title[] = 'Yii PHP Framework';

        echo Html::encode(implode(' | ', array_unique($title)));
        ?></title>

    <meta property="og:site_name" content="Yii Framework"/>
    <meta property="og:title" content="<?= !empty($this->title) ? Html::encode($this->title) : 'Yii Framework' ?>"/>
    <meta property="og:image" content="<?= Url::to(Yii::getAlias('@web/image/facebook_cover.png'), true) ?>"/>
    <meta property="og:url" content="<?= Url::to() ?>"/>
    <meta property="og:description" content=""/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="yiiframework"/>
    <meta name="twitter:title" content="<?= !empty($this->title) ? Html::encode($this->title) : 'Yii Framework' ?>"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="<?= Url::to(Yii::getAlias('@web/image/twitter_cover.png'), true) ?>"/>
    <meta name="twitter:image:width" content="120"/>
    <meta name="twitter:image:height" content="120"/>

    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target="#scrollnav" data-offset="1">
<?php $this->beginBody() ?>

<div id="page-wrapper" class="">

    <header class="navbar navbar-default navbar-static" id="top">
        <div class="container">
            <div id="main-nav-head" class="navbar-header">
                <a href="<?= Yii::$app->homeUrl ?>" class="navbar-brand">
                    <img src="<?= Yii::getAlias('@web/image/yii_logo_light.svg') ?>"
                         alt="Yii PHP Framework"
                         width="165" height="35"/>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i
                            class="fa fa-inverse fa-bars"></i></button>
            </div>

            <div class="navbar-collapse collapse navbar-right">
                <?php

                // main navigation
                $controller = Yii::$app->controller ? Yii::$app->controller->id : null;
                $action = Yii::$app->controller && Yii::$app->controller->action ? Yii::$app->controller->action->id : null;
                echo Nav::widget([
                    'id' => 'main-nav',
                    'encodeLabels' => false,
                    'options' => ['class' => 'nav navbar-nav navbar-main-menu'],
                    'activateItems' => true,
                    'activateParents' => true,
                    'dropDownCaret' => '<span class="caret"></span>',
                    'items' => [
                        ['label' => 'Guide', 'url' => ['guide/entry'], 'options' => ['title' => 'The Definitive Guide to Yii'], 'active' => ($controller == 'guide')],
                        ['label' => 'API', 'url' => ['api/entry'], 'options' => ['title' => 'API Documentation'], 'active' => ($controller == 'api')],
                        ['label' => 'Wiki', 'url' => ['wiki/index'], 'options' => ['title' => 'Community Wiki'], 'active' => ($controller == 'wiki')],
                        ['label' => 'Extensions', 'url' => ['extension/index'], 'options' => ['title' => 'Extensions'], 'active' => ($controller == 'extension' || strncmp($action, 'extension-', 10) === 0)],
                        ['label' => 'Community', 'items' => [
                            ['label' => 'Forum', 'url' => '@web/forum', 'options' => ['title' => 'Community Forum']],
                            ['label' => 'Live Chat', 'url' => ['site/chat']],
                            ['label' => 'Resources', 'url' => ['site/community']],
                            ['label' => 'Members', 'url' => ['/user/index'], 'options' => ['title' => 'Community Members'], 'active' => ($controller == 'user' && in_array($action, ['index', 'view']))],
                            ['label' => 'Hall of Fame', 'url' => ['/user/halloffame'], 'options' => ['title' => 'Community Hall of Fame']],
                            ['label' => 'Badges', 'url' => ['/badges'], 'options' => ['title' => 'Community Badges'], 'active' => ($controller == 'user' && in_array($action, ['badges', 'view-badge']))],
                        ]],
                        ['label' => 'More&hellip;', 'items' => [
                            ['label' => 'Learn', 'options' => ['class' => 'separator']],
                            ['label' => 'Books', 'url' => ['site/books']],
                            ['label' => 'Resources', 'url' => ['site/resources']],
                            ['label' => 'Develop', 'options' => ['class' => 'separator']],
                            ['label' => 'Download Yii', 'url' => ['site/download']],
                            //['label' => '<i class="fa fa-angle-double-right"></i>Extensions<span class="label label-warning">coming soon</span>', 'url' => 'https://yiicamp.com/extensions'],
                            ['label' => 'Report an Issue', 'url' => ['site/report-issue']],
                            ['label' => 'Report a Security Issue', 'url' => ['site/security']],
                            ['label' => 'Contribute to Yii', 'url' => ['/site/contribute']],
                            ['label' => 'About', 'options' => ['class' => 'separator']],
                            ['label' => 'What is Yii?', 'url' => ['guide/view', 'type' => 'guide', 'version' => reset(Yii::$app->params['versions']['api']), 'language' => 'en', 'section' => 'intro-yii']],
                            ['label' => 'News', 'url' => ['news/index'], 'active' => ($controller == 'news')],
                            ['label' => 'License', 'url' => ['site/license']],
                            ['label' => 'Team', 'url' => ['site/team']],
                            ['label' => 'Official logo', 'url' => ['site/logo']],
                        ]],
                        //['label' => 'Login', 'url' => ['auth/login'], 'visible' => Yii::$app->user->isGuest, 'options' => ['class' => 'hidden-lg']],
                        //['label' => 'Signup', 'url' => ['auth/signup'], 'visible' => Yii::$app->user->isGuest, 'options' => ['class' => 'hidden-lg']],
                        //['label' => 'Logout', 'url' => ['auth/logout'], 'visible' => !Yii::$app->user->isGuest, 'linkOptions' => ['data-method' => 'post'], 'options' => ['class' => 'hidden-lg']],
                    ],
                ]);
                ?>
                <div class="nav navbar-nav navbar-right">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        $items = [
                            ['label' => 'Login', 'url' => ['/auth/login']]
                        ];
                    } else {
                        $items = [
                            [
                                'label' => Html::encode(Yii::$app->user->identity->username),
                                'url' => ['/auth/login'],
                                'items' => [
                                    ['label' => 'My account', 'url' => ['/user/profile']],
                                    ['label'=>'Logout','url'=>['/auth/logout'],'linkOptions'=>['data-method'=>'post']],
                                ]
                            ]
                        ];
                    }
                    echo Nav::widget([
                        'id' => 'login-nav',
                        'encodeLabels' => true,
                        'options' => ['class' => 'nav navbar-nav navbar-main-menu'],
                        'activateItems' => false,
                        'dropDownCaret' => '<span class="caret"></span>',
                        'items' => $items]);
                    ?>
                </div>

                <div class="nav navbar-nav navbar-right">
                    <?= $this->render('partials/_searchForm'); ?>
                </div>
            </div>
        </div>
    </header>

    <?= $this->context instanceof BaseController && isset($this->context->sectionTitle) ? $this->render('partials/_sectionHeader', ['title' => $this->context->sectionTitle]) : ''; ?>

    <?= \app\widgets\Alert::widget(['options' => ['class' => 'main-alert']]) ?>
    <?= $content ?>

    <?= $this->render('partials/_footer'); ?>

</div> <!-- close the id="page-wrapper" -->

<?php $this->endBody() ?>
<?php
if (YII_ENV_DEV): ?>
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));
        //]]></script>

<?php endif ?>
</body>
</html>
<?php $this->endPage() ?>
