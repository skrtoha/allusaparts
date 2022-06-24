<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllusapartsPage */
/** @var $menu \app\models\AllusapartsMenu */

$this->title = 'Обновить: ' . $model->title;
?>
<div class="allusaparts-page-update">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'menu' => $menu
    ]) ?>

</div>
