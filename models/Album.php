<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $sortable
 * @property integer $visible
 * @property string $update_at
 *
 * @property Art[] $arts
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['sortable', 'visible'], 'integer'],
            [['update_at'], 'safe'],
            [['name'], 'string', 'max' => 40],
            [['description'], 'string', 'max' => 160],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'description' => 'Описание',
            'sortable' => 'Порядок сортировки',
            'visible' => 'Видимость',
            'update_at' => 'Время обновления',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArts()
    {
        return $this->hasMany(Art::className(), ['album_id' => 'id']);
    }
}
