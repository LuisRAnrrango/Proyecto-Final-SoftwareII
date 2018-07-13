<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "factura".
 *
 * @property int $IDFACTURA
 * @property int $IDCLIENTE
 * @property int $IDCAJERO
 * @property int $IDDETALLEFACTURA
 * @property string $FECHAFACTURA
 * @property string $NUMEROFACTURA
 * @property double $TOTALFACTURA
 * @property string $ESTADO
 *
 * @property Cliente $cLIENTE
 * @property Cajeros $cAJERO
 * @property Detallefactura $dETALLEFACTURA
 */
class Factura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'factura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDCLIENTE', 'IDCAJERO', 'IDDETALLEFACTURA'], 'required'],
            [['IDCLIENTE', 'IDCAJERO', 'IDDETALLEFACTURA'], 'integer'],
            [['FECHAFACTURA'], 'safe'],
            [['TOTALFACTURA'], 'number'],
            [['NUMEROFACTURA'], 'string', 'max' => 5],
            [['ESTADO'], 'string', 'max' => 20],
            [['IDCLIENTE'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['IDCLIENTE' => 'IDCLIENTE']],
            [['IDCAJERO'], 'exist', 'skipOnError' => true, 'targetClass' => Cajeros::className(), 'targetAttribute' => ['IDCAJERO' => 'IDCAJERO']],
            [['IDDETALLEFACTURA'], 'exist', 'skipOnError' => true, 'targetClass' => Detallefactura::className(), 'targetAttribute' => ['IDDETALLEFACTURA' => 'IDDETALLEFACTURA']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDFACTURA' => 'Idfactura',
            'IDCLIENTE' => 'Idcliente',
            'IDCAJERO' => 'Idcajero',
            'IDDETALLEFACTURA' => 'Iddetallefactura',
            'FECHAFACTURA' => 'Fechafactura',
            'NUMEROFACTURA' => 'Numerofactura',
            'TOTALFACTURA' => 'Totalfactura',
            'ESTADO' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCLIENTE()
    {
        return $this->hasOne(Cliente::className(), ['IDCLIENTE' => 'IDCLIENTE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCAJERO()
    {
        return $this->hasOne(Cajeros::className(), ['IDCAJERO' => 'IDCAJERO']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDETALLEFACTURA()
    {
        return $this->hasOne(Detallefactura::className(), ['IDDETALLEFACTURA' => 'IDDETALLEFACTURA']);
    }
}
