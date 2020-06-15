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
 * @property int|null $category_id категория
 * @property string|null $opisanie
 * @property string|null $image1 foto1
 * @property string|null $image2 foto2
 * @property string|null $image3 foto3
 * @property string|null $polka1 размер полки 1
 * @property string|null $polka2 размер полки 2
 * @property string|null $polka3 размер полки 3
 * @property string|null $moika о мойке
 * @property string|null $vit вытяжка
 * @property string|null $razmer размер кухни
 * @property string|null $time время сборки
 * @property string|null $tree дерево
 *
 * @property Categories $category
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
            [['opisanie', 'image1', 'image2', 'image3', 'polka1', 'polka2', 'polka3', 'moika', 'vit', 'razmer', 'time', 'tree'], 'string', 'max' => 550],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'category_id' => 'категория',
            'opisanie' => 'Opisanie',
            'image1' => 'foto1',
            'image2' => 'foto2',
            'image3' => 'foto3',
            'polka1' => 'размер полки 1',
            'polka2' => 'размер полки 2',
            'polka3' => 'размер полки 3',
            'moika' => 'о мойке',
            'vit' => 'вытяжка',
            'razmer' => 'размер кухни',
            'time' => 'время сборки ',
            'tree' => 'дерево',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
}
