<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\EntryForm;
/**
 * 前端公用基类 controller
 */
class FrontendBase extends Controller 
{

    /**
     * 视图渲染.
     *
     * 参数: string $urlPath 视图文件路径.
     * 参数: array $params 传递给视图的参数.
     * 返回: string 返回渲染的页面数据
     */
	public function carlRender($urlPath = '', $params = array() )
	{
		$info  = Yii::$app->params['pageInfo'];
		$info = array_merge($info, $params);
		return $this->render($urlPath, $info);
	}
	
	/**
	 *
	 * 初始化页面标题
	 * 暂时用不上, 先注释
	 */
 	//public function __init()
	//{
	//	parent::__init();
	//	$info  = Yii::$app->params['pageInfo'];
	//	$this->title = $info['title'];
	//	$this->imgUrl = $info['imgUrl'];
	//}
	

	/**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @inheritdoc
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
}
