<?php
namespace app\models;

use Yii;

/**
 * This is the model class for table "allusaparts_menu".
 *
 * @property int $id
 * @property string|null $url
 * @property string $name
 * @property int|null $page_id
 * @property int|null $parent_id
 * @property string $language
 * @property int $order
 *
 * @property AllusapartsPage $page
 * @property AllusapartsMenu $parent
 */
class AllusapartsMenu extends \yii\db\ActiveRecord{
    private static $parents = [];
    private static $menu = [];
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allusaparts_menu';
    }

    public static function getMenu(){
        if (!empty(self::$menu)) return self::$menu;
        $commonList = self::find()
            ->orderBy('order')
            ->where(['language' => Yii::$app->params['lang']])
            ->asArray()
            ->all();
        $mainList = [];
        $parentList = [];
        foreach($commonList as $value){
            if ($value['parent_id']) $parentList[$value['parent_id']][] = $value;
            else $mainList[$value['id']] = $value;
        }
        foreach($mainList as $id => $value){
            $v = & self::$menu[$id];
            $v = $value;
            if (isset($parentList[$id])) $v['childs'] = $parentList[$id];
            else $v['childs'] = [];
        }
        return self::$menu;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['page_id', 'parent_id', 'order'], 'integer'],
            [['url', 'name', 'language'], 'string', 'max' => 100],
            [['name', 'language'], 'unique', 'targetAttribute' => ['name', 'language']],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => AllusapartsPage::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Адрес страницы',
            'name' => 'Наименование меню',
            'page_id' => 'Содержание',
            'parent_id' => 'Родитель',
            'order' => 'Порядок'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(AllusapartsPage::className(), ['id' => 'page_id']);
    }

    public static function getParents(){
        if (!empty(self::$parents)) return self::$parents;
        $result = self::find()
            ->where([
                'parent_id' => 0,
                'language' => Yii::$app->params['lang']
            ])
            ->all();

        /** @var AllusapartsMenu $value */
        self::$parents[0] = 'ничего не выбрано';
        foreach($result as $value) self::$parents[$value->id] = $value->name;
        return self::$parents;
    }

    public static function activeQueryMenu()
    {
        return self::find()
            ->select([
                'p.text',
                'p.h1',
                'p.title',
                'p.description',
                'v.link',
                'm.url',
                'm.name'
            ])
            ->from(['m' => AllusapartsMenu::tableName()])
            ->leftJoin(['p' => AllusapartsPage::tableName()], 'p.id = m.page_id')
            ->leftJoin(['v' => AllusapartsVideolink::tableName()], 'v.page_id = m.page_id');
    }
}
