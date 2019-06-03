<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $about
 * @property string $address
 * @property string $photoHome
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $create_time
 */
class AboutModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about', 'address', 'photoHome', 'photo1', 'photo2', 'photo3'], 'required'],
            [['about'], 'string'],
            [['create_time'], 'safe'],
            [['address'], 'string', 'max' => 255],
            [['photoHome', 'photo1', 'photo2', 'photo3'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'about' => Yii::t('app', 'About'),
            'address' => Yii::t('app', 'Address'),
            'photoHome' => Yii::t('app', 'Photo Home'),
            'photo1' => Yii::t('app', 'Photo1'),
            'photo2' => Yii::t('app', 'Photo2'),
            'photo3' => Yii::t('app', 'Photo3'),
        ];
    }
}
