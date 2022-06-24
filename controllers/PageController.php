<?php

namespace app\controllers;

use app\models\AllusapartsMenu;
use yii\filters\AccessControl;

class PageController extends SiteController{
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function($rule, $action){
                            return true;
                        }
                    ],
                ],
            ],
        ];
    }
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