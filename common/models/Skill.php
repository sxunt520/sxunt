<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%skill}}".
 *
 * @property integer $id
 * @property string $datetime
 * @property string $pic
 * @property string $tuijian
 * @property integer $tjType
 * @property string $from
 * @property string $author
 * @property string $title
 * @property string $content
 */
class Skill extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%skill}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime', 'pic', 'tuijian', 'tjType', 'from', 'author', 'title', 'content'], 'required'],
            [['datetime'], 'safe'],
            [['tuijian', 'content'], 'string'],
            [['tjType'], 'integer'],
            [['pic'], 'string', 'max' => 200],
            [['from'], 'string', 'max' => 30],
            [['author'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime' => '日期',
            'pic' => 'Pic',
            'tuijian' => '是否推荐到首页',
            'tjType' => '推荐到首页类型',
            'from' => '来源',
            'author' => '作者',
            'title' => '标题',
            'content' => '内容',
        ];
    }
}
