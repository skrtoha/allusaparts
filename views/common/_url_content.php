<?php
use app\models\UrlContent;
use app\models\User;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this \yii\web\View */

$url = str_replace(['&editTags=1', '?editTags=1'], '', $_SERVER['REQUEST_URI']);
$urlcontentObject = UrlContent::findOne(['url' => $url, 'website' => 1]);
if (!$urlcontentObject){
    $urlcontentObject = new UrlContent();
    $urlcontentObject->url = $url;
}
$isAvailableEditTags =  User::isAdmin() && isset($_GET['editTags']) && $_GET['editTags'] == 1;
if ($isAvailableEditTags){?>
    <?=$this->render('/common/_tinymce')?>

    <div class="content">
        <section class="container">
            <div class="row">
                <div class="text-form">
                    <?php $form = ActiveForm::begin(['action' => '/site/urlcontent']); ?>
                    <?=$form->field($urlcontentObject, 'url')->hiddenInput();?>
                    <?=$form->field($urlcontentObject, 'before_content')->textarea(['class' => 'textarea_content'])?>
                    <?=$form->field($urlcontentObject, 'content')->textarea(['class' => 'textarea_content'])?>
                    <?=$form->field($urlcontentObject, 'after_content')->textarea(['class' => 'textarea_content'])?>
                    <div class="form-group">
                        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                    <a href="<?=$_SERVER['HTTP_REFERER']?>">Отменить</a>
                </div>
            </div>
        </section>
    </div>
<?}
else{
    if ($urlcontentObject->content || $urlcontentObject->before_content || $urlcontentObject->after_content){?>
        <div class="content">
            <section class="container">
                <div class="row">
                    <div id="url_content_wrap">
                        <?if ($urlcontentObject->before_content){?>
                            <?=$urlcontentObject->before_content?>
                        <?}?>
                        <?if ($urlcontentObject->content){?>
                            <div id="url_content">
                                <?=$urlcontentObject->content?>
                            </div>
                            <a href="#" id="showUrlContent">Показать</a>
                        <?}?>
                        <?if ($urlcontentObject->after_content){?>
                            <?=$urlcontentObject->after_content?>
                        <?}?>

                    </div>
                </div>
            </section>
        </div>
    <?}?>
    <?if (User::isAdmin()){
        $href = $_SERVER['REQUEST_URI'];
        if (preg_match('/\?/', $href)) $href .= '&editTags=1';
        else $href .= '?editTags=1';
        ?>
        <a class="edit" href="<?=$href?>">Edit tags</a>
    <?}?>
    <script>
        $('#showUrlContent').on('click', function(e){
            e.preventDefault();
            const $th = $(this);
            $th.prev().toggleClass('active_1');
        })
    </script>
<?}?>