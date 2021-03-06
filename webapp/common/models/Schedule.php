<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $id_kennel
 * @property int $day
 * @property string $open_time
 * @property string $close_time
 *
 * @property Kennel $kennel
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kennel', 'day'], 'required'],
            [['id_kennel', 'day'], 'integer'],
            [['open_time', 'close_time'], 'safe'],
            [['id_kennel'], 'exist', 'skipOnError' => true, 'targetClass' => Kennel::className(), 'targetAttribute' => ['id_kennel' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kennel' => 'Id Kennel',
            'day' => 'Day',
            'open_time' => 'Open Time',
            'close_time' => 'Close Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKennel()
    {
        return $this->hasOne(Kennel::className(), ['id' => 'id_kennel']);
    }
}
