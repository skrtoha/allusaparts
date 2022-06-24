<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "allusaparts_page".
 *
 * @property int $id
 * @property string|null $text
 * @property string|null $h1
 * @property string|null $title
 * @property string|null $description
 *
 * @property AllusapartsMenu[] $allusapartsMenus
 * @property AllusapartsVideolink[] $videolinks
 */
class AllusapartsPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allusaparts_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'description'], 'string'],
            [['h1', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'h1' => 'H1',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasMany(AllusapartsMenu::className(), ['page_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVideolinks()
    {
        return $this->hasMany(AllusapartsVideolink::className(), ['page_id' => 'id']);
    }
}
