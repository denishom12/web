<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $text Текст
 * @property string $createdAt Дата создания
 * @property string|null $updatedAt Дата изменения
 * @property int $filmid Фильм
 *
 * @property Film $film
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'createdAt', 'filmid'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['filmid'], 'integer'],
            [['text'], 'string', 'max' => 256],
            [['filmid'], 'exist', 'skipOnError' => true, 'targetClass' => Film::class(), 'targetAttribute' => ['filmid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Текст',
            'createdAt' => 'Дата создания',
            'updatedAt' => 'Дата изменения',
            'filmid' => 'Фильм',
        ];
    }

    /**
     * Gets query for [[Film]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFilm()
    {
        return $this->hasOne(Film::class(), ['id' => 'filmid']);
    }
}
