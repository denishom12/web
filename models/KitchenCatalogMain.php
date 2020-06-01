<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kitchen_catalog_main".
 *
 * @property int $id
 * @property string $image изображение
 * @property string $title описание
 * @property int $cost цена
 */
class KitchenCatalogMain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitchen_catalog_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'title', 'cost'], 'required'],
            [['cost', 'category_id'], 'integer'],
            [['image', 'title'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'изображение',
            'title' => 'описание',
            'cost' => 'цена',
        ];
    }
}
