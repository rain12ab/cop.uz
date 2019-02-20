<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $id
 * @property string $project_name
 * @property int $type_id
 * @property int $field_id
 * @property int $unit_id
 * @property double $natural_sum
 * @property double $produce_sum
 * @property double $annual_export_sum
 * @property double $annuaL_profit
 * @property double $budget
 * @property double $project_value_plan
 * @property double $project_value_praxis
 * @property double $oneself_capital
 * @property double $bank_credit
 * @property double $foreigner_invest
 * @property int $service_bank_id
 * @property int $jobs
 * @property int $period_start
 * @property array $pics
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_name', 'type_id', 'field_id', 'unit_id', 'natural_sum', 'produce_sum', 'annual_export_sum', 'annuaL_profit', 'budget', 'project_value_plan', 'project_value_praxis', 'oneself_capital', 'bank_credit', 'foreigner_invest', 'service_bank_id', 'jobs', 'period_start', 'pics'], 'required'],
            [['type_id', 'field_id', 'unit_id', 'service_bank_id', 'jobs', 'period_start', 'owner_id'], 'integer'],
            [['natural_sum', 'produce_sum', 'annual_export_sum', 'annuaL_profit', 'budget', 'project_value_plan', 'project_value_praxis', 'oneself_capital', 'bank_credit', 'foreigner_invest'], 'number'],
            [['pics'], 'safe'],
            [['project_name'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'project_name' => Yii::t('app', 'Project Name'),
            'owner_id' => Yii::t('app', 'Project id'),
            'type_id' => Yii::t('app', 'Type ID'),
            'field_id' => Yii::t('app', 'Field ID'),
            'unit_id' => Yii::t('app', 'Unit ID'),
            'natural_sum' => Yii::t('app', 'Natural Sum'),
            'produce_sum' => Yii::t('app', 'Produce Sum'),
            'annual_export_sum' => Yii::t('app', 'Annual Export Sum'),
            'annuaL_profit' => Yii::t('app', 'Annua L Profit'),
            'budget' => Yii::t('app', 'Budget'),
            'project_value_plan' => Yii::t('app', 'Project Value Plan'),
            'project_value_praxis' => Yii::t('app', 'Project Value Praxis'),
            'oneself_capital' => Yii::t('app', 'Oneself Capital'),
            'bank_credit' => Yii::t('app', 'Bank Credit'),
            'foreigner_invest' => Yii::t('app', 'Foreigner Invest'),
            'service_bank_id' => Yii::t('app', 'Service Bank ID'),
            'jobs' => Yii::t('app', 'Jobs'),
            'period_start' => Yii::t('app', 'Period Start'),
            'pics' => Yii::t('app', 'Pics'),
        ];
    }
}
