<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllusapartsPage */
/* @var $form yii\widgets\ActiveForm */
/** @var $menu \app\models\AllusapartsMenu */
?>

<?=$this->render('/common/_tinymce')?>

<div class="content">
    <?php $form = ActiveForm::begin(); ?>

    <section class="container">
        <div class="text-form">
            <div class="form-group">
                <?= $form->field($model, 'text')->textarea(['class' => 'textarea_content']) ?>
            </div>
            <?=$form->field($model, 'h1')->textInput(['maxlength' => true]) ?>
            <?=$form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?=$form->field($model, 'description')->textarea(['class' => 'textarea_content']) ?>
        </div>
        <h2>Видеоссылки</h2>
        <div class="text-form">
            <?=Html::a('Добавить', ['#'], ['id' => 'videolink_add'])?>
            <?if ($model->videolinks){
                foreach($model->videolinks as $value){?>
                    <div class="videolink">
                        <input class="form-control" name="AllusapartsVideolink[]" value="<?=$value->link?>">
                        <a href="#" class="videolink_remove"></a>
                    </div>
                <?}?>
            <?}?>
        </div>
        <h2>Настройки меню</h2>
        <div class="form-group">
            <?=$form->field($menu, 'name')->textInput()?>
            <?=$form->field($menu, 'url')->textInput()?>
        </div>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        <?=Html::a('Назад', $_SERVER['HTTP_REFERER'])?>
    </section>

    <?php ActiveForm::end(); ?>
</div>
