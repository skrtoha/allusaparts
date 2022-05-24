<?php

namespace app\controllers;

use app\models\ChangepasswordForm;
use app\models\Clientbasket;
use app\models\Clientordercontent;
use app\models\Clientordersbyemail;
use app\models\Clients;
use app\models\DealerpricesMarkup;
use app\models\ForgotpassForm;
use app\models\MydataForm;
use app\models\OnhandaContent;
use app\models\OnhandaMain;
use app\models\OnhandcContent;
use app\models\OnhandcMain;
use app\models\OnhandaTracknumbers;
use app\models\Ordercontent;
use app\models\Orders;
use app\models\Tracktry;
use app\models\Paid;
use app\models\PaymentForm;
use app\models\PlaceorderForm;
use app\models\SavedOrders;
use app\models\SignupForm;
use app\models\PHPMailer;
use app\models\OtherFunctions;
use app\models\TracknumbersSearch;
use app\models\UrlContent;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\Response;
use yii\web\HttpException;

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

class SiteController extends Controller
{

    public $layout = 'main';
    public $loginForm;
    public $addUrl = '';

    public $brandsAll = array("Allison", "Ariel", "Automann", "Baldor", "Dendix", "Bobcat", "Rexroth", "Caterpillar", "Cummins", "Danfoss", "Detroit Diesel", "Ditch Witch", "Eaton Fuller", "Fabco", "Fp Diesel", "Freightliner", "Gardner Denver", "Horton", "John Deere", "Kenworth", "LeeBoy", "Marmon-Herrington", "Meritor", "MTU", "National Oil Well Varco", "Paccar", "Parker", "Peterbilt", "Sandvik", "Tigercat", "Tsubaki", "Vermeer", "Waukesha", "Weir", "Woodward");

    public $en_brands = array("Allison Transmission", "Atlas Copco", "Caterpillar", "Cummins", "Ditch Witch", "Hyundai", "John Deere", "Komatsu", "MTU");

    public $ru_brands = array("Allison Transmission", "Atlas Copco", "Caterpillar", "Cummins", "Ditch Witch", "Hyundai", "John Deere", "Komatsu", "MTU", "Hitachi");

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get', 'post'],
                ],
            ],
            /*[
                'class' => 'yii\filters\HttpCache',
                'only' => ['cart'],
                'cacheControlHeader'=>'',

            ],*/
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        //error_reporting(E_ALL);
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                //'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                //'fixedVerifyCode' => null,
            ],
        ];
    }

    public function beforeAction($action)
    {
        //print_r($action->id);
        /*if (\Yii::$app->user->isGuest && Yii::$app->params['redirectUserAutorizationUrl'] != "/".$action->id) {
            return \Yii::$app->getResponse()->redirect(Yii::$app->params['redirectUserAutorizationUrl'])->send();
        }*/
        /*$this->loginForm = new LoginForm();
        if ($this->loginForm->load(Yii::$app->request->post()) && $this->loginForm->login()) {

        }*/
        //$this->loginForm->password='';
        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'main_ru';
        return $this->render('index_ru');
    }

    public function actionIndexen()
    {
        return $this->render('index');
    }

    public function actionTerms_and_conditions_of_personal_data()
    {
        return $this->render('terms_and_conditions_of_personal_data');
    }

    public function actionCookie_policy()
    {
        return $this->render('cookie_policy');
    }

    public function actionTrackinfo()
    {
        //$this->layout = 'basic';
        return $this->render('track');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionRucontacts()
    {
        $this->layout = 'main_ru';
        return $this->render('rucontacts');
    }

    public function actionBrands($brand)
    {
        $lower_brand = [];
        foreach ($this->en_brands as $b) {
            $lower_brand[] = strtolower($b);
        }
        if (!in_array($brand, $lower_brand)) {
            throw new HttpException(
                404,
                'Page Not Found!'
            );
        }

        return $this->render('brands', ['brand' => $brand]);
    }

    public function actionRubrands($brand)
    {
        $this->layout = 'main_ru';
        $lower_brand = [];
        foreach ($this->ru_brands as $b) {
            $lower_brand[] = strtolower($b);
        }
        if (!in_array($brand, $lower_brand)) {
            throw new HttpException(
                404,
                'Запрошенная страница не найдена'
            );
        }

        return $this->render('rubrands', ['brand' => $brand]);
    }

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionUrlcontent(){
        $url = $_POST['UrlContent']['url'];
        $model = UrlContent::findOne(['url' => $url]);
        if (!$model){
            $model = new UrlContent();
            $model->url = $_POST['UrlContent']['url'];
        }
        $model->content = $_POST['UrlContent']['content'];
        $model->save();
        return $this->redirect($url);
    }
}
