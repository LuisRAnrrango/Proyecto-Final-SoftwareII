<?php

namespace backend\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cajeros;

/**
 * CajerosSearch represents the model behind the search form of `backend\models\Cajeros`.
 */
class CajerosSearch extends Cajeros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDCAJERO'], 'integer'],
            [['CEDULARUC', 'NOMBRES', 'APELLIDOS', 'FECHANACIMIENTO', 'CIUDADNACIMIENTO', 'DIRECCION', 'TELEFONO', 'EMAIL', 'ESTADO'], 'safe'],
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
        $query = Cajeros::find();

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
            'IDCAJERO' => $this->IDCAJERO,
            'FECHANACIMIENTO' => $this->FECHANACIMIENTO,
        ]);

        $query->andFilterWhere(['like', 'CEDULARUC', $this->CEDULARUC])
            ->andFilterWhere(['like', 'NOMBRES', $this->NOMBRES])
            ->andFilterWhere(['like', 'APELLIDOS', $this->APELLIDOS])
            ->andFilterWhere(['like', 'CIUDADNACIMIENTO', $this->CIUDADNACIMIENTO])
            ->andFilterWhere(['like', 'DIRECCION', $this->DIRECCION])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO]);

        return $dataProvider;
    }
}
