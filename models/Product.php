<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id id товара
 * @property string $title Наименование товара
 * @property string $createdAt дата загрузки
 * @property string|null $updatedAt дата обновления
 *
 * @property Review[] $reviews
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'createdAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['title'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id товара',
            'title' => 'Наименование товара',
            'createdAt' => 'дата загрузки',
            'updatedAt' => 'дата обновления',
        ];
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::class, ['productId' => 'id']);
    }

    public function fields()
    {
        return array_merge(parent::fields(),[
            'reviews'
        ]);
    }
}
