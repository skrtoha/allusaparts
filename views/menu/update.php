<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllusapartsMenu */

$this->title = 'Обновить: ' . $model->name;
?>
<section class="content">
    <div class="container">
        <div class="allusaparts-menu-create">
            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</section>
