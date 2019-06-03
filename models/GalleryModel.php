<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $photo
 * @property string $photo_thumb
 * @property int $create_time
 */
class GalleryModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'photo_thumb', 'create_time'], 'required'],
            [['photo_thumb'], 'string'],
            [['create_time'], 'safe'],
            [['photo'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'photo' => Yii::t('app', 'Photo'),
            'photo_thumb' => Yii::t('app', 'Photo Thumb'),
            'create_time' => Yii::t('app', 'Create Time'),
        ];
    }
}
