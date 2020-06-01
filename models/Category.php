<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name имя
 *
 * @property KitchenCatalogMain[] $kitchenCatalogMains
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'имя',
        ];
    }

    /**
     * Gets query for [[KitchenCatalogMains]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKitchenCatalogMains()
    {
        return $this->hasMany(KitchenCatalogMain::className(), ['category_id' => 'id']);
    }
}
