<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'type_id') ?>

    <?= $form->field($model, 'field_id') ?>

    <?= $form->field($model, 'unit_id') ?>

    <?php // echo $form->field($model, 'natural_sum') ?>

    <?php // echo $form->field($model, 'produce_sum') ?>

    <?php // echo $form->field($model, 'annual_export_sum') ?>

    <?php // echo $form->field($model, 'annuaL_profit') ?>

    <?php // echo $form->field($model, 'budget') ?>

    <?php // echo $form->field($model, 'project_value_plan') ?>

    <?php // echo $form->field($model, 'project_value_praxis') ?>

    <?php // echo $form->field($model, 'oneself_capital') ?>

    <?php // echo $form->field($model, 'bank_credit') ?>

    <?php // echo $form->field($model, 'foreigner_invest') ?>

    <?php // echo $form->field($model, 'service_bank_id') ?>

    <?php // echo $form->field($model, 'jobs') ?>

    <?php // echo $form->field($model, 'period_start') ?>

    <?php // echo $form->field($model, 'pics') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
