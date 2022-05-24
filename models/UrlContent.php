<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "income_content".
 *
 * @property string $url
 * @property string $content
 */
class UrlContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'url_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'content'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'url' => 'Адрес',
            'content' => 'Контент'
        ];
    }
}
