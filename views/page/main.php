<?php
/* @var $this yii\web\View */
/** @var $menu array */

$this->title = $menu['title'];
$this->registerMetaTag([
    'name' => 'description',
    'content' => $menu['description']
])
?>
<section class="content">
    <?=$this->render('/common/_edit_content')?>
    <div class="container">
        <h1><?=$menu['h1']?></h1>
        <?=$menu['text']?>
    </div>
</section>


