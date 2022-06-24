<?php

use app\models\AllusapartsMenu;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AllusapartsMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allusaparts Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">
    <div class="container">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Создать пункт меню', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'name',
                'url:url',
                [
                    'attribute' => 'page_id',
                    'format' => 'raw',
                    'value' => function(AllusapartsMenu $model){
                        return Html::a('Изменить', ['content/update', 'menu_id' => $model->id]);
                    }
                ],
                [
                    'attribute' => 'parent_id',
                    'filter' => AllusapartsMenu::getParents(),
                    'value' => function(AllusapartsMenu $model){
                        $parents = AllusapartsMenu::getParents();
                        return $parents[$model->parent_id];
                    }
                ],

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update}{delete}'
                ],
            ],
        ]); ?>
    </div>
</section>