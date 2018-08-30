<?php

/**
 * @var $this yii\web\View
 * @var $rows int
 */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Total inserted rows:<?= $rows; ?></p>

    <code><?= __FILE__ ?></code>
</div>
