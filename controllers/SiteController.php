<?php

namespace app\controllers;

use alexeevdv\sms\ru\Sms;
use app\models\Question;
use app\models\Request;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
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
        $modal = new Request();
        $question = new Question();

        if ($modal->load(Yii::$app->request->post()) && $modal->validate()) {
            $modal->save();
            $response = $this->sendMessage($modal);

            if ($response->code == 100) {
                Yii::$app->session->setFlash('success',
                    'Ваша заявка успешно отправлена, мастер скоро свяжется с вами');
                return $this->redirect('/');
            }
        }


        return $this->render('index', [
            'modal' => $modal,
            'question' => $question
        ]);
    }

    public function actionError()
    {
        return $this->render('error');
    }

//    /**
//     * Login action.
//     *
//     * @return Response|string
//     */
//    public function actionLogin()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//        }
//
//        $model->password = '';
//        return $this->render('login', [
//            'model' => $model,
//        ]);
//    }

//    /**
//     * Logout action.
//     *
//     * @return Response
//     */
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }


    /**
     * @param $modal
     * @return mixed
     */
    public function sendMessage($modal)
    {
        return \Yii::$app->sms->send(new Sms([
            "to" => "89528054699",
            "text" => self::configurationTextMessageFromRequest(
                $modal->name,
                $modal->comment,
                $modal->phone,
                $modal->id
            ),
        ]));
    }

    /**
     * @param string $name
     * @param string $comment
     * @param string $phone
     * @param integer $id
     * @return string
     */
    public function configurationTextMessageFromRequest($name, $comment = "Пусто", $phone, $id)
    {
        return
            'Номер заявки' . $id . PHP_EOL .
            'Имя: ' . $name . PHP_EOL .
            'Номер телефона: ' . $phone . PHP_EOL .
            'Комментарий: ' . $comment . PHP_EOL .
            'Дата: ' . date('Y-m-d H:m');
    }

}
