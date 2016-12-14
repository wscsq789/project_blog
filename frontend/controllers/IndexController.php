<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\IdConvertToUniqueString;
//use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\IndexForm;


//use app\models\EntryForm;
/**
 * Site controller
 */
class IndexController extends FrontendBase
{

    /**
     * 首页页面.
     *
     * @return mixed
     */
    public function actionIndex()
    {
		return $this->carlRender('/index/index', ['classHeader' => '']);
    }

    /**
     * 关于我页面 
     *
     * @return mixed
     */
    public function actionAbout()
    {
		//$model = new IndexForm();
		//$countries = $model->getAllCountries();
		//print_r($countries);
		return $this->carlRender('/index/about', ['classHeader'=>'1']);
    }

    /**
     * 文章页面.
     *
     * @return mixed
     */
    public function actionBlog()
    {
		$newestList = 'newestBlogList';
		$redis = Yii::$app->redis;
		if($redis->exists($newestList))
		{
			$relax = $redis->get($newestList);
			$relax = unserialize($relax);
		}
		else
		{
			//$redis->set('hh', 'this is hh');
			//$redis->expire('hh', 3);
			//$expire = $redis->ttl('hh');
			//echo($expire);
			//$a = $redis->get('a');
			//print_r($a);
			//die;
			$model = new IndexForm();
			$relax = $model->getNewFiveRelax();
			//ob_start();
			//header("content-type:text/plain;");
			//print_r($relax);die;
			foreach($relax as $key => $val)
			{
				$relax[$key]['ds'] = IdConvertToUniqueString::alphaID($val['id']);
				$relax[$key]['content'] = mb_substr(strip_tags($val['content']), 0, 130, 'utf-8');
			}
			$redis->set($newestList, serialize($relax));
			$redis->expire($newestList, 6 * 3600);	
		}
		return $this->carlRender('/index/blog', ['classHeader' => '1', 'relax' => $relax]);
    }

    /**
     * 文章页面.
     *
     * @return mixed
     */
    public function actionDetails()
    {
		$request = Yii::$app->request;
		
		$ds = $request->get('ds');   
		$id = IdConvertToUniqueString::alphaID($ds, true);
		$model = new IndexForm();
		$relax = $model->getDetailRelax($id);
		//!empty($relax) && $relax['content'] = str_replace('<p>', '<p class="para">', $relax['content']);
		return $this->carlRender('/index/details', ['classHeader' => '1', 'relax' => $relax]);
    }
    
	/**
     * 联系我页面.
     *
     * @return mixed
     */
    public function actionContact()
    {
        //$model = new ContactForm();
        //if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        //    if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
        //        Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
        //    } else {
        //        Yii::$app->session->setFlash('error', 'There was an error sending email.');
        //    }

        //    return $this->refresh();
        //} else {
		return $this->carlRender('/index/contact', ['classHeader' => '1']);
        //    return $this->render('contact', [ 'model' => $model, ]);
        //}
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        die("enter login.");
		if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

	public function actionSay($message)
	{
		//$post = Yii::$app->request->get();
		//print_r($post);;
		return $this->render('say', ['message' => $message]);
	}

	public function actionEntry()
	{ 
	    $model = new EntryForm;

	    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
	    	// 验证 $model 收到的数据

		    // 做些有意义的事 ...

		    return $this->render('entry-confirm', ['model' => $model]);
		} else {
		    // 无论是初始化显示还是数据验证错误
		    return $this->render('entry', ['model' => $model]);
		}
	}
}
