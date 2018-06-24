<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
?>
<div class="container style_external_links">
    <div class="box bottom-space">
        <p>We are proud to have a friendly and helpful Yii community. We believe such a community will not only
            get you started faster and more easily with Yii, but also make the Yii programming a happy experience
            for you.</p>

        <p>Yii has multiple communication channels in different languages. Both official, semi-official and fully
            community managed.</p>
        <hr>
        <div class="row">
            <div class="col-md-6">

                <h2>International</h2>

                <ul class="xicons">
                    <li>
                        <div class="xcard">
                            <a  href="<?= Url::to(['site/chat']) ?>">
                                <div class="xicon irc"></div>
                                <span>IRC</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="xcard">
                            <a  href="<?= Url::to(['site/chat']) ?>">
                                <div class="xicon slack"></div>
                                <span>Slack</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="xcard">
                            <a target="_blank" title="Stack Overflow"
                               href="https://stackoverflow.com/questions/tagged/yii">
                                <div class="xicon stack-overflow"></div>
                                <span>Yii 1</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="xcard">
                            <a target="_blank" title="Stack Overflow"
                               href="https://stackoverflow.com/questions/tagged/yii2">
                                <div class="xicon stack-overflow"></div>
                                <span>Yii 2</span>
                            </a>
                        </div>
                    </li>


                </ul>

            </div>
            <div class="col-md-6">

                <h2>Social Networks</h2>

                <ul class="xicons">
                    <li>
                        <div class="xcard">
                            <a target="_blank" title="Facebook" href="https://www.facebook.com/groups/yiitalk/">
                                <div class="xicon facebook"></div>
                                <span>Official group</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="xcard">
                            <a target="_blank" title="Reddit" href="https://www.reddit.com/r/yii/">
                                <div class="xicon reddit"></div>
                                <span>Reddit</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="xcard">
                            <a target="_blank" title="Twitter" href="https://twitter.com/yiiframework">
                                <div class="xicon twitter"></div>
                                <span>Twitter</span>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="content box bottom-space">


                <h2>Russian and Ukrainian</h2>

                <h3>Communities</h3>

                <ul>
                    <li><a href="http://yiiframework.ru/">yiiframework.ru</a></li>
                    <li><a href="https://yiiframework.com.ua/">yiiframework.com.ua</a></li>
                    <li><a href="https://habrahabr.ru/hub/yii/">Habrahabr</a></li>
                    <li><a href="https://yiiconf.ru/">YiiConf Russia website</a></li>
                </ul>

                <h3>Chats</h3>

                <ul>
                    <li>There is #russian channel in <?= \yii\helpers\Html::a('Slack chat', ['site/chat']) ?></li>
                    <li><a href="https://t.me/yii2ru">Telegram</a></li>
                </ul>

                <h3>Q & A</h3>

                <ul>
                    <li>StackOverflow: <a href="https://ru.stackoverflow.com/questions/tagged/yii">Yii</a>,
                        <a href="https://ru.stackoverflow.com/questions/tagged/yii2">Yii 2</a></li>
                    <li><a href="https://toster.ru/tag/yii/questions">Toster</a></li>
                </ul>

                <h3>Social Networks</h3>

                <ul>
                    <li><a href="https://vk.com/yiiframework">VK Russia</a></li>
                    <li><a href="https://vk.com/yiiframework_ua">VK Ukraine</a></li>
                    <li><a href="https://www.facebook.com/groups/yiitalk.ru/">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content box bottom-space">
                <h2>Indonesian</h2>
                <h3>Social Networks</h3>

                <ul>
                    <li><a href="https://www.facebook.com/groups/yii.indonesia/">Facebook</a></li>
                    <li><a href="https://t.me/YiiFrameworkIndonesia">Telegram</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
