<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "owners".
 *
 * @property int $id
 * @property string $full_name
 * @property string $company_name
 * @property int $ITN
 * @property int $district_id
 * @property int $country_id
 */
class Owners extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'company_name', 'ITN', 'district_id', 'country_id'], 'required'],
            [['ITN', 'district_id', 'country_id'], 'integer'],
            [['full_name', 'company_name'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => Yii::t('app', 'Full Name'),
            'company_name' => Yii::t('app', 'Company Name'),
            'ITN' => Yii::t('app', 'I T N'),
            'district_id' => Yii::t('app', 'District ID'),
            'country_id' => Yii::t('app', 'Country ID'),
        ];
    }
}
