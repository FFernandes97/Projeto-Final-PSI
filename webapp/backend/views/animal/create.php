<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\fileupload\FileUploadUI;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model common\models\animal */

$this->title = 'Novo Animal';

$this->params['breadcrumbs'][] = ['label' => 'Animals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <div class="row">
       <?php $form = ActiveForm::begin(['id' => 'animal-form']); ?>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informação Básica</h3>
                    </div>
                    <div class="box-body">
                        <!-- Name -->
                        <?= $form->field($model, 'name')->textInput(); ?>
                        <!-- Description -->
                        <?= $form->field($model, 'description')->textInput(); ?>
                        <!-- Chip Number -->
                        <?= $form->field($model, 'chip')->textInput(); ?>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ficha Do Animal</h3>
                    </div>
                    <div class="box-body">
                        <!-- Animal Gender -->
                        <?= $form->field($model, 'gender')->dropDownList([
                            'M' => 'Masculino',
                            'F' => 'Feminino'
                        ]); ?>
                        <!-- Animal Size -->
                        <?= $form->field($model, 'weight') ?>
                        <!-- Animal Age -->
                        <?= $form->field($model, 'age') ?>
                        <!-- Animal Neutered -->
                        <?= $form->field($model, 'neutered')->dropDownList([
                            '0' => 'Sim',
                            '1' => 'Não'
                        ]); ?>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Extra</h3>
                    </div>
                    <div class="box-body">
                        
                    </div>
                    <div class="box-footer">
                        <!-- Submit Button -->
                        <?= Html::submitButton('Finalizar', ['class' => 'btn btn-info btn-lg pull-right', 'name' => 'submit-button']) ?>
                    </div>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
