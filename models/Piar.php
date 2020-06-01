<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "piars".
 *
 * @property int $id номер
 * @property string $image изображение
 */
class Piar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'piars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'номер',
            'image' => 'изображение',
        ];
    }
}
