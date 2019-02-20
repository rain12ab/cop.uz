<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner_id')->textInput() ?>
    
    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'field_id')->textInput() ?>

    <?= $form->field($model, 'unit_id')->textInput() ?>

    <?= $form->field($model, 'natural_sum')->textInput() ?>

    <?= $form->field($model, 'produce_sum')->textInput() ?>

    <?= $form->field($model, 'annual_export_sum')->textInput() ?>

    <?= $form->field($model, 'annuaL_profit')->textInput() ?>

    <?= $form->field($model, 'budget')->textInput() ?>

    <?= $form->field($model, 'project_value_plan')->textInput() ?>

    <?= $form->field($model, 'project_value_praxis')->textInput() ?>

    <?= $form->field($model, 'oneself_capital')->textInput() ?>

    <?= $form->field($model, 'bank_credit')->textInput() ?>

    <?= $form->field($model, 'foreigner_invest')->textInput() ?>

    <?= $form->field($model, 'service_bank_id')->textInput() ?>

    <?= $form->field($model, 'jobs')->textInput() ?>

    <?= $form->field($model, 'period_start')->textInput() ?>

    <?= $form->field($model, 'pics')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
