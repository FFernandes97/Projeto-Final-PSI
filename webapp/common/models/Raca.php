<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "raca".
 *
 * @property int $id
 * @property string $nome
 * @property string $tipo
 *
 * @property Ficha[] $fichas
 */
class Raca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'raca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'tipo'], 'required'],
            [['nome', 'tipo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Raca',
            'tipo' => 'Descrição da Raca',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFichas()
    {
        return $this->hasMany(Ficha::className(), ['id_raca' => 'id']);
    }
}
