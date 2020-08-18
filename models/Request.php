<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $comment
 */
class Request extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required', 'message' => 'Поле обязательно для заполнения'],
            [
                ['name'],
                'string',
                'max' => 100,
                'tooShort' => 'Поле должно содержать не больше 100 символов',
            ],
            [['phone'], 'string', 'min' => 11, 'max' => 11, 'tooShort' => 'Поле должно содержать 11 символов'],
            [['comment'], 'string', 'max' => 400, 'tooShort' => 'Поле может содержать максимум 400 символов']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Как к вам обращаться?',
            'phone' => 'Номер телефона',
            'comment' => 'Что нужно сделать?'
        ];
    }


}
