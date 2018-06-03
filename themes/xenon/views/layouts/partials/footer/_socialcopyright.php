<?php
use yii\helpers\Html;
?>
<ul class="footerList">
  <li class="footerList_item">
      <span class="social">
          <a href="https://github.com/yiisoft" target="_blank" rel="noopener noreferrer"><i class="fa fa-github"></i></a>
          <a href="https://twitter.com/yiiframework" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/groups/yiitalk/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
          <?= Html::a('<i class="fa fa-rss"></i>', ['rss/all'])?>
      </span>
  </li>
  <li class="footerList_item">
    <?= Html::a('Terms of service', ['site/tos']) ?>
  </li>
  <li class="footerList_item">
      <?= Html::a('License', ['site/license']) ?>
  </li>
  <li class="footerList_item">
      <a href="https://github.com/yiisoft-contrib/yiiframework.com" target="_blank" rel="noopener noreferrer">Website Souce Code</a>
  </li>
  <li class="footerList_item">
      &nbsp;
  </li>
  <li class="footerList_item">
    &copy; 2008 - <?= date('Y') ?> Yii
  </li>
  <li class="footerList_item">
      Design: <a href="http://www.xenonpublicidad.com/" target="_blank" rel="noopener noreferrer">Xenon</a>
  </li>
</ul>
