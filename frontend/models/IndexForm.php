<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class IndexForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;

	/**
	 * 参数: void 
	 * 获取最新10条数据
	 * 返回: array
	 */
	public function getNewFiveRelax()
	{
		$db = \Yii::$app->db;	
		$command = $db->createCommand('SELECT * FROM `cy_relax` order by publishtime desc limit 100');
		return $command->queryAll();
	}

	/**
	 * 参数: int $id 
	 * 获取单条详细数据
	 * 返回: array
	 */
	public function getDetailRelax($id)
	{
		$db = \Yii::$app->db;	
		$command = $db->createCommand('SELECT * FROM `cy_relax` where id = :id');
		$command->bindValue(':id', $id);
		return $command->queryOne();
	}
	
	/**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
