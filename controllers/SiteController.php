<?php

namespace app\controllers;

use app\models\OrderForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $enableCsrfValidation = false;
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
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionOrder()
    {
        if (Yii::$app->request->isPost){
            $_POST = json_decode(file_get_contents('php://input'),true);
            $data = Yii::$app->request->post();
            $this->sendMailOrder($data);
        }
    }

    public function actionCall(){
        if (Yii::$app->request->isPost){
            $_POST = json_decode(file_get_contents('php://input'),true);
            $data = Yii::$app->request->post();
            $this->sendMail($data);
        }
    }


    function sendMailOrder($data){
        $msm = '';
        $msmHtml = '';
        foreach ($data as $d){
            $msmHtml = $msmHtml."<b>".$d['question'].'    '.$d['answer']."</b><br>";
            $msm = $msm.$d['question'].'    '.$d['answer'];
        }
        Yii::$app->mailer->compose()
            ->setFrom('saint-credit@yandex.ru')
            ->setTo('saint-credit@yandex.ru')
            ->setSubject('Заявка')
            ->setTextBody($msm)
            ->setHtmlBody($msmHtml)
            ->send();

    }

    function sendMail($data){
        foreach ($data as $d){
             $name = $d['name'];
             $phone = $d['phone'];
        }
        $msm = "
            Имя : $name
            Телефон клиента : $phone 
        ";
        $msmHtml = "
            <b>Имя : $name</b><br>
            <b>Телефон клиента : $phone </b><br>
        ";
        Yii::$app->mailer->compose()
            ->setFrom('saint-credit@yandex.ru')
            ->setTo('saint-credit@yandex.ru')
            ->setSubject('Заявка на бесплатный звонок')
            ->setTextBody($msm)
            ->setHtmlBody($msmHtml)
            ->send();
    }


}
