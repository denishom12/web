<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kitchens".
 *
 * @property int $id номер кухни
 * @property string $title заголовок
 * @property string $opisanie описание
 * @property string $image картинка
 * @property string $createdAt дата создания
 */
class Kitchen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitchens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'opisanie', 'image', 'createdAt'], 'required'],
            [['createdAt'], 'safe'],
            [['title', 'opisanie', 'image'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'номер кухни',
            'title' => 'заголовок',
            'opisanie' => 'описание',
            'image' => 'картинка',
            'createdAt' => 'дата создания',
        ];
    }
}
