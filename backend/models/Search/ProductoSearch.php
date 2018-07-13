<?php

namespace backend\models\Search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Producto;

/**
 * ProductoSearch represents the model behind the search form of `backend\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPRODUCTO'], 'integer'],
            [['NOMBREPRODUCTO', 'DESCRIPCIONPRODUCTO'], 'safe'],
            [['PRECIOUNITARIO'], 'number'],
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
        $query = Producto::find();

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
            'IDPRODUCTO' => $this->IDPRODUCTO,
            'PRECIOUNITARIO' => $this->PRECIOUNITARIO,
        ]);

        $query->andFilterWhere(['like', 'NOMBREPRODUCTO', $this->NOMBREPRODUCTO])
            ->andFilterWhere(['like', 'DESCRIPCIONPRODUCTO', $this->DESCRIPCIONPRODUCTO]);

        return $dataProvider;
    }
}
