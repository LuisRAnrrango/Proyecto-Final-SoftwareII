<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cajeros".
 *
 * @property int $IDCAJERO
 * @property string $CEDULARUC
 * @property string $NOMBRES
 * @property string $APELLIDOS
 * @property string $FECHANACIMIENTO
 * @property string $CIUDADNACIMIENTO
 * @property string $DIRECCION
 * @property string $TELEFONO
 * @property string $EMAIL
 * @property string $ESTADO
 *
 * @property Factura[] $facturas
 */
class Cajeros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cajeros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FECHANACIMIENTO'], 'safe'],
            [['CEDULARUC', 'TELEFONO'], 'string', 'max' => 10],
            [['NOMBRES', 'APELLIDOS', 'CIUDADNACIMIENTO', 'DIRECCION', 'EMAIL'], 'string', 'max' => 50],
            [['ESTADO'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDCAJERO' => 'Idcajero',
            'CEDULARUC' => 'Cedularuc',
            'NOMBRES' => 'Nombres',
            'APELLIDOS' => 'Apellidos',
            'FECHANACIMIENTO' => 'Fechanacimiento',
            'CIUDADNACIMIENTO' => 'Ciudadnacimiento',
            'DIRECCION' => 'Direccion',
            'TELEFONO' => 'Telefono',
            'EMAIL' => 'Email',
            'ESTADO' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['IDCAJERO' => 'IDCAJERO']);
    }
}
