<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Test2;
use yii\mongodb\Query;

class Test2Controller extends Controller
{
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
        $test = Test2::listTests();
        return $this->render('test', ["test"=>$test]);
    }
    public function actionTest2()
    {
        $test = Test2::listTests();
        return $this->render('test', ["test"=>$test]);
    }
    public function actionMongo()
    {
        $query = new Query;
        // compose the query
        $query
            ->from('testInventory')
            ->limit(10);
        // execute the query
        $rows = $query->all();
        
        return $this->render('mongo', ["test"=>$rows]);
    }
}