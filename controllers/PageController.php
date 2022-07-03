<?php

namespace app\controllers;

use app\models\AllusapartsMenu;
use yii\filters\AccessControl;

class PageController extends SiteController{
    public function actionMain($main){
        $menu = AllusapartsMenu::activeQueryMenu()
            ->where(['m.url' => '/page/'.$main])
            ->asArray()
            ->one();
        return $this->render('main', [
            'menu' => $menu
        ]);
    }

}