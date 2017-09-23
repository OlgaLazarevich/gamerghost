<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Art".
 *
 * @property integer $id
 * @property string $src
 * @property string $name
 * @property string $description
 * @property integer $sortable
 * @property integer $visible
 * @property string $update_at
 * @property integer $album_id
 *
 * @property Album $album
 */
class Art extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Art';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['src', 'album_id'], 'required'],
            [['sortable', 'visible', 'album_id'], 'integer'],
            [['update_at'], 'safe'],
            [['src', 'description'], 'string', 'max' => 180],
            [['name'], 'string', 'max' => 40],
            [['album_id'], 'exist', 'skipOnError' => true, 'targetClass' => Album::className(), 'targetAttribute' => ['album_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Адрес изображения',
            'name' => 'Название',
            'description' => 'Описание',
            'sortable' => 'Порядок сортировки',
            'visible' => 'Видимость',
            'update_at' => 'Время обновления',
            'album_id' => 'Альбом',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlbum()
    {
        return $this->hasOne(Album::className(), ['id' => 'album_id']);
    }
}
