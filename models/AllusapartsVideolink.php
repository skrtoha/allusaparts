<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "allusaparts_videolink".
 *
 * @property int $page_id
 * @property string $link
 *
 * @property AllusapartsPage $page
 */
class AllusapartsVideolink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allusaparts_videolink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'link'], 'required'],
            [['page_id'], 'integer'],
            [['link'], 'string', 'max' => 255],
            [['page_id', 'link'], 'unique', 'targetAttribute' => ['page_id', 'link']],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => AllusapartsPage::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'page_id' => 'Page ID',
            'link' => 'Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(AllusapartsPage::className(), ['id' => 'page_id']);
    }
}
