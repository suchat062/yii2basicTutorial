<?php

namespace app\module\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\module\setting\models\Customers;

/**
 * CustomerSearch represents the model behind the search form about `app\module\setting\models\Customers`.
 */
class CustomerSearch extends Customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id'], 'integer'],
            [['customer_fname', 'customer_lname', 'customer_age'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Customers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        $dataProvider->setSort([
           'attributes' => [
               'customer_lname',
               'customer_fname' => [
                   'asc' => ['customers.customer_id'=> SORT_ASC],
                   'desc' => ['customers.customer_id'=> SORT_DESC]
               ]
           ]
        ]);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'customer_fname', $this->customer_fname])
            ->andFilterWhere(['like', 'customer_lname', $this->customer_lname])
            ->andFilterWhere(['like', 'customer_age', $this->customer_age]);

        return $dataProvider;
    }
}
