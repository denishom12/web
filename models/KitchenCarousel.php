<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kitchenCarousels".
 *
 * @property int $id номер кухни
 * @property string $title название кухни
 * @property string $image изображение
 */
class KitchenCarousel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitchenCarousels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['title', 'image'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'номер кухни',
            'title' => 'название кухни',
            'image' => 'изображение',
        ];
    }
}