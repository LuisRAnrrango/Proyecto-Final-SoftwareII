<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $IDPRODUCTO
 * @property string $NOMBREPRODUCTO
 * @property string $DESCRIPCIONPRODUCTO
 * @property double $PRECIOUNITARIO
 *
 * @property Detallefactura[] $detallefacturas
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PRECIOUNITARIO'], 'number'],
            [['NOMBREPRODUCTO', 'DESCRIPCIONPRODUCTO'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPRODUCTO' => 'Idproducto',
            'NOMBREPRODUCTO' => 'Nombreproducto',
            'DESCRIPCIONPRODUCTO' => 'Descripcionproducto',
            'PRECIOUNITARIO' => 'Preciounitario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallefacturas()
    {
        return $this->hasMany(Detallefactura::className(), ['IDPRODUCTO' => 'IDPRODUCTO']);
    }
}
