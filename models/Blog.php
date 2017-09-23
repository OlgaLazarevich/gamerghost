<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $text
 * @property string $img_src
 * @property string $date
 * @property integer $visible
 * @property integer $section_id
 *
 * @property Sections $section
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'text', 'img_src', 'visible', 'section_id'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['visible', 'section_id'], 'integer'],
            [['name'], 'string', 'max' => 160],
            [['description'], 'string', 'max' => 200],
            [['img_src'], 'string', 'max' => 180],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sections::className(), 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'text' => 'Текст',
            'img_src' => 'Изображение',
            'date' => 'Дата',
            'visible' => 'Видимость',
            'section_id' => 'Раздел',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Sections::className(), ['id' => 'section_id']);
    }
}
