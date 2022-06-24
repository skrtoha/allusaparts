<?php

use app\models\AllusapartsMenu;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllusapartsMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="allusaparts-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(AllusapartsMenu::getParents()) ?>

    <?=$form->field($model, 'order')->textInput()?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?=Html::a('Назад', $_SERVER['HTTP_REFERER']);?>

</div>
