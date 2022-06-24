<?php

use app\models\User;

if (User::isAdmin()){?>
    <?=\yii\bootstrap\Html::a(
        'Edit',
        ['/content/update', 'url' => $_SERVER['REQUEST_URI']],
        ['class' => 'edit']
    )?>
<?}?>