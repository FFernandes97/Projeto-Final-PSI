<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "breed".
 *
 * @property int $id
 * @property int $id_parent
 * @property string $name
 * @property string $description
 * @property string $origin
 * @property string $lifespan
 *
 * @property Breed $parent
 * @property Breed[] $breeds
 * @property BreedCoat[] $breedCoats
 * @property BreedEnergy[] $breedEnergies
 * @property BreedSize[] $breedSizes
 * @property FileBreed[] $fileBreeds
 */
class Breed extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'breed';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent'], 'integer'],
            [['name'], 'required'],
            [['name', 'description', 'origin', 'lifespan'], 'string', 'max' => 255],
            [['id_parent'], 'exist', 'skipOnError' => true, 'targetClass' => Breed::className(), 'targetAttribute' => ['id_parent' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_parent' => 'Id Parent',
            'name' => 'Nome',
            'description' => 'Descrição',
            'origin' => 'Origem',
            'lifespan' => 'Tempo médio de vida',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Breed::className(), ['id' => 'id_parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreeds()
    {
        return $this->hasMany(Breed::className(), ['id_parent' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreedCoats()
    {
        return $this->hasMany(BreedCoat::className(), ['id_breed' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreedEnergies()
    {
        return $this->hasMany(BreedEnergy::className(), ['id_breed' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBreedSizes()
    {
        return $this->hasMany(BreedSize::className(), ['id_breed' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFileBreeds()
    {
        return $this->hasMany(FileBreed::className(), ['id_breed' => 'id']);
    }
}
