<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Projects;

/**
 * ProjectsSearch represents the model behind the search form of `common\models\Projects`.
 */
class ProjectsSearch extends Projects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'field_id', 'unit_id', 'service_bank_id', 'jobs', 'period_start', 'owner_id'], 'integer'],
            [['project_name', 'pics'], 'safe'],
            [['natural_sum', 'produce_sum', 'annual_export_sum', 'annuaL_profit', 'budget', 'project_value_plan', 'project_value_praxis', 'oneself_capital', 'bank_credit', 'foreigner_invest'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Projects::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type_id' => $this->type_id,
            'field_id' => $this->field_id,
            'unit_id' => $this->unit_id,
            'natural_sum' => $this->natural_sum,
            'produce_sum' => $this->produce_sum,
            'annual_export_sum' => $this->annual_export_sum,
            'annuaL_profit' => $this->annuaL_profit,
            'budget' => $this->budget,
            'project_value_plan' => $this->project_value_plan,
            'project_value_praxis' => $this->project_value_praxis,
            'oneself_capital' => $this->oneself_capital,
            'bank_credit' => $this->bank_credit,
            'foreigner_invest' => $this->foreigner_invest,
            'service_bank_id' => $this->service_bank_id,
            'jobs' => $this->jobs,
            'period_start' => $this->period_start,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'pics', $this->pics]);

        return $dataProvider;
    }
}
