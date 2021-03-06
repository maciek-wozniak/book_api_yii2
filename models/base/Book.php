<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the base-model class for table "book".
 *
 * @property integer $id
 * @property string $title
 * @property string $author
 * @property string $published
 * @property string $isbn
 * @property integer $price
 * @property string $description
 * @property string $image_url
 * @property integer $status
 * @property string $created_at
 * @property string $aliasModel
 */
abstract class Book extends \yii\db\ActiveRecord
{

    const STATUS_AVAILABLE = 1;
    const STATUS_UNAVAILABLE = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'value' => new Expression('NOW()'),
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'published', 'isbn', 'price', 'description', 'image_url', 'status'], 'required'],
            [['published'], 'safe'],
            [['status'], 'integer'],
            [['price'], 'double'],
            ['status', 'in', 'range' => [self::STATUS_AVAILABLE, self::STATUS_UNAVAILABLE]],
            [['description'], 'string'],
            [['title', 'author', 'isbn', 'image_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'published' => 'Published',
            'isbn' => 'Isbn',
            'price' => 'Price',
            'description' => 'Description',
            'image_url' => 'Image Url',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }




}
