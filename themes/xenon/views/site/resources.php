<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'Resources';
$this->params['breadcrumbs'][] = $this->title;
$this->context->sectionTitle=$this->title;

?>
<div class="site-resources">
    <div class="container">
        <p>There are various resources that aren't part of official Yii website but are very helpful. Check
            these out.</p>
        <div class="resources-cards">
            <div class="row">

                <div class="col-xs-12 col-md-6 col-lg-3 group">
                    <div class="res-card">
                        <h3 class="margin-top-0">News</h3 class="margin-top-0">

                        <div class="image">
                            <a href="http://yiifeed.com/">
                                <img src="<?= Yii::getAlias('@web/image/resources/yiifeed.png') ?>" alt="">
                            </a>
                        </div>

                        <h4><a href="http://yiifeed.com/">YiiFeed</a></h4>

                        <p>is a community-driven news source for both official Yii announcements and
                            unofficial articles, blogposts and tutorials. Anyone can suggest news. RSS provided.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3 group">
                    <div class="res-card">
                        <h3 class="margin-top-0">Showcase</h3 class="margin-top-0">

                        <div class="image">
                            <a href="http://yiipowered.com/en">
                                <img src="<?= Yii::getAlias('@web/image/resources/yiipowered.png') ?>" alt="">
                            </a>
                        </div>

                        <h4><a href="http://yiipowered.com/en">YiiPowered</a></h4>

                        <p>Community-powered showcase of projects and websites built with Yii including OpenSource
                            projects.</p>

                        <p>Projects could be added by anyone and are published shortly after moderation.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3 group">
                    <div class="res-card">
                        <h3 class="margin-top-0">Videos</h3 class="margin-top-0">

                        <div class="image">
                            <img src="<?= Yii::getAlias('@web/image/resources/videos.png') ?>" alt="">
                        </div>

                        <p>There are many videos available. <a href="https://www.youtube.com/results?search_query=yii">Check
                                YouTube for "yii"</a>.</p>
                        <p>Below are links to two big video series community likes most.</p>

                        <ul>
                            <li><a href="https://www.youtube.com/playlist?list=PLMyGpiUTm106xkNQh9WeMsa-LXjanaLUm">Beginning
                                    Yii
                                    2.0 by Tom King</a></li>
                            <li><a href="https://www.youtube.com/playlist?list=PLRd0zhQj3CBmusDbBzFgg3H20VxLx2mkF">Yii2
                                    Lessons,
                                    DoingITeasyChannel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3 group">
                    <div class="res-card">
                        <h3 class="margin-top-0">Yii 1.1</h3 class="margin-top-0">

                        <div class="image">
                            <a href="<?= Url::to(['guide/blog-entry']) ?>">
                                <img src="<?= Yii::getAlias('@web/image/resources/yii11.png') ?>" alt="">
                            </a>
                        </div>

                        <h4><?= Html::a('The Yii 1.1 Blog tutorial', ['guide/blog-entry']) ?></h4>

                        <p>If you need to learn good old Yii 1.1 this is a must read official tutorial.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
