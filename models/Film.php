<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 */
class Film extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'createdAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
        ];
    }


    public function getComments(){
        return $this -> hasMany(Comment::class,['filmId' => 'id']);
    }

    public function fields()
    {
        return array_merge(parent::fields(),[
            'comments'
        ]);
    }
}



