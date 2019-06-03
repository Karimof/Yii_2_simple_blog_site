<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_text
 * @property int $price
 * @property string $product_photo
 * @property string $product_photo_thumb
 * @property integer $counter
 * @property string $create_time
 */
class ProductsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'product_text', 'price', 'product_photo', 'create_time'], 'required'],
            [['product_text'], 'string'],
            [['counter'], 'integer'],
            [['create_time'], 'safe'],
            [['price','product_name', 'product_photo','product_photo_thumb'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_text' => Yii::t('app', 'Product Text'),
            'price' => Yii::t('app', 'Price'),
            'product_photo' => Yii::t('app', 'Product Photo'),
        ];
    }
}
