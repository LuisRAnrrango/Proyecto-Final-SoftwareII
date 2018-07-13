<?php

namespace backend\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Factura;

/**
 * FacturaSearch represents the model behind the search form of `backend\models\Factura`.
 */
class FacturaSearch extends Factura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDFACTURA', 'IDCLIENTE', 'IDCAJERO', 'IDDETALLEFACTURA'], 'integer'],
            [['FECHAFACTURA', 'NUMEROFACTURA', 'ESTADO'], 'safe'],
            [['TOTALFACTURA'], 'number'],
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
        $query = Factura::find();

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
            'IDFACTURA' => $this->IDFACTURA,
            'IDCLIENTE' => $this->IDCLIENTE,
            'IDCAJERO' => $this->IDCAJERO,
            'IDDETALLEFACTURA' => $this->IDDETALLEFACTURA,
            'FECHAFACTURA' => $this->FECHAFACTURA,
            'TOTALFACTURA' => $this->TOTALFACTURA,
        ]);

        $query->andFilterWhere(['like', 'NUMEROFACTURA', $this->NUMEROFACTURA])
            ->andFilterWhere(['like', 'ESTADO', $this->ESTADO]);

        return $dataProvider;
    }
}
