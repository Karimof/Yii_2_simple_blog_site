<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $mavzu
 * @property string $matn
 * @property string $photo
 * @property string $photo_thumb
 * @property int $counter
 * @property string $sana_vaqt
 */
class NewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mavzu', 'matn'], 'required'],
            [['sana_vaqt'], 'safe'],
            [['mavzu', 'photo','photo_thumb'], 'string', 'max' => 128],
            [['matn'], 'string'],
            [['counter'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mavzu' => 'Mavzu',
            'matn' => 'Matn',
            'photo' => 'Photo',
            'photo_thumb' => 'Photo Thumb',
            'sana_vaqt' => 'Sana Vaqt',
        ];
    }



}
