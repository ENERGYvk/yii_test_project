<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property string|null $date
 * @property int|null $status
 */
class Reviews extends \yii\db\ActiveRecord
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
            [['date'], 'safe'],
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['text'], 'string', 'max' => 400],
            [['text','name'],'required','message' => 'Обязательно для заполнения']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
