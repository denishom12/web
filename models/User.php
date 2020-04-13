<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $login логин
 * @property string $password пароль
 * @property string $accessToken токен
 * @property string $createdAt дата создания
 * @property string|null $updatedAt дата изменения
 */
class User extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['login', 'password', 'accessToken'], 'string', 'max' => 128],
            [['login'], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'логин',
            'password' => 'пароль',
            'accessToken' => 'токен',
            'createdAt' => 'дата создания',
            'updatedAt' => 'дата изменения',
        ];
    }

    /**
     * @param bool $insert
     * @return bool
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if(!parent::beforeSave($insert)){
            return false;
        }

        $this->accessToken = yii::$app->security->generateRandomString();
        $this->password = Yii::$app->security->generatePasswordHash($this->password);
        return true;
    }

    /**
     * Возвращает труе если пароли совпадают
     * @param $password
     * @return bool
     *
     *
     */
    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Поиск по логину
     * @param $login
     * @return User|null
     *
     */
    public static function findByLogin($login){
       return User::findOne(['login'=>$login]);
    }
}

