<?php

namespace console\controller;

class InitController extends \yii\console\Controller
{

	public function actionUser()
	{
		echo("create Init user ... \n");

		$username = $this->prompt('input username:');

		$email = $this->prompt('input email for' . $username);

		$password = $this->prompt('input password for ' . $username . ':');


		$model = new User();
		$model->username= $username;
		$model->email = $email;
		$model->password = $password;

		if(!$)
		{
		}


	}

}
