<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detallefactura".
 *
 * @property int $IDDETALLEFACTURA
 * @property int $IDPRODUCTO
 * @property int $CANTIDAD
 * @property double $TOTAL
 *
 * @property Producto $pRODUCTO
 * @property Factura[] $facturas
 */
class Detallefactura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detallefactura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPRODUCTO'], 'required'],
            [['IDPRODUCTO', 'CANTIDAD'], 'integer'],
            [['TOTAL'], 'number'],
            [['IDPRODUCTO'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['IDPRODUCTO' => 'IDPRODUCTO']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDDETALLEFACTURA' => 'Iddetallefactura',
            'IDPRODUCTO' => 'Idproducto',
            'CANTIDAD' => 'Cantidad',
            'TOTAL' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPRODUCTO()
    {
        return $this->hasOne(Producto::className(), ['IDPRODUCTO' => 'IDPRODUCTO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['IDDETALLEFACTURA' => 'IDDETALLEFACTURA']);
    }
}
