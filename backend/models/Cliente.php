<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $IDCLIENTE
 * @property string $CEDULARUC
 * @property string $NOMBRES
 * @property string $APELLIDOS
 * @property string $FECHANACIMIENTO
 * @property string $CIUDADNACIMIENTO
 * @property string $TIPOCLIENTE
 * @property string $DIRECCION
 * @property string $TELEFONO
 * @property string $EMAIL
 * @property string $ESTADO
 *
 * @property Factura[] $facturas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [    
            [['FECHANACIMIENTO'], 'safe'],
            [['FECHANACIMIENTO'], 'date'],
            [['CEDULARUC', 'TELEFONO'], 'string', 'max' => 10],
            [['NOMBRES', 'APELLIDOS', 'CIUDADNACIMIENTO', 'DIRECCION', 'EMAIL'], 'string', 'max' => 50],
            [['TIPOCLIENTE'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDCLIENTE' => 'Codigo',
            'CEDULARUC' => 'Cedula o Ruc',
            'NOMBRES' => 'Nombres',
            'APELLIDOS' => 'Apellidos',
            'FECHANACIMIENTO' => 'Fecha Nacimiento',
            'CIUDADNACIMIENTO' => 'Ciudad Nacimiento',
            'TIPOCLIENTE' => 'Tipo Clientes',
            'DIRECCION' => 'Dirección',
            'TELEFONO' => 'Teléfono',
            'EMAIL' => 'Email',
            'ESTADO' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['IDCLIENTE' => 'IDCLIENTE']);
    }
}
