<?php

namespace app\controllers;

use app\models\AllusapartsMenu;
use app\models\AllusapartsVideolink;
use Yii;
use app\models\AllusapartsPage;
use app\models\AllusapartsPageSearch;
use yii\db\ActiveRecord;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContentController implements the CRUD actions for AllusapartsPage model.
 */
class ContentController extends SiteController
{
    public $layout = 'main_ru';

    /**
     * {@inheritdoc}
     */
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

    /**
     * Lists all AllusapartsPage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AllusapartsPageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new AllusapartsPage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAddBrand(){
        $model = new AllusapartsPage();
        $menu = new AllusapartsMenu();
        $menu->type = 'brands';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $menu->load(Yii::$app->request->post());
            $menu->page_id = Yii::$app->db->lastInsertID;
            if ($menu->save()){
                mkdir($_SERVER['DOCUMENT_ROOT']."/images/page/{$model->title}");
            }
            return $this->redirect($menu->url);
        }

        return $this->render('add-brand', [
            'model' => $model,
            'menu' => $menu
        ]);
    }

    public function actionSubmenuAdd($id){

    }

    public function actionDeleteBrand($page_id, $url){
        $url = str_replace('%20', ' ', $url);
        AllusapartsMenu::deleteAll(['url' => $url]);
        AllusapartsPage::deleteAll(['id' => $page_id]);
        AllusapartsVideolink::deleteAll(['page_id' => $page_id]);
        return $this->goHome();
    }

    /**
     * Updates an existing AllusapartsPage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($menu_id, $lang = 'ru'){
        $menu = AllusapartsMenu::find()->where(['id' => $menu_id])->one();
        if ($menu->page_id) $model = $this->findModel($menu->page_id);
        else $model = new AllusapartsPage();

        Yii::$app->params['lang'] = $lang;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (!$menu->page_id) $menu->page_id = Yii::$app->db->getLastInsertID();
            $menu->save();
            AllusapartsVideolink::deleteAll(['page_id' => $menu->page_id]);
            if ($_POST['AllusapartsVideolink']){
                foreach($_POST['AllusapartsVideolink'] as $value){
                    $videolink = new AllusapartsVideolink();
                    $videolink->page_id = $menu->page_id;
                    $videolink->link = $value;
                    $videolink->save();
                }

            }
            return $this->redirect(['/menu/index', 'lang' => Yii::$app->params['lang']]);
        }

        return $this->render('update', [
            'menu' => $menu,
            'model' => $model
        ]);
    }

    /**
     * Deletes an existing AllusapartsPage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AllusapartsPage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ActiveRecord  the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = AllusapartsPage::find()
            ->with('videolinks')
            ->where(['id' => $id])
            ->one();
        if ($model) return $model;

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
