<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id id
 * @property string $text текст отзыва
 * @property string $createdAt дата загрузки
 * @property string|null $updatedAt дата обновления
 * @property int $productId id товара
 *
 * @property Product $product
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'createdAt', 'productId'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['productId'], 'integer'],
            [['text'], 'string', 'max' => 256],
            [['productId'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['productId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'text' => 'текст отзыва',
            'createdAt' => 'дата загрузки',
            'updatedAt' => 'дата обновления',
            'productId' => 'id товара',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'productId']);
    }
}
