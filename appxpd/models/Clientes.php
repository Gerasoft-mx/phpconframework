<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string $EMail
 * @property string $Telefono
 * @property string $RFC
 * @property string $Domicilio
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'EMail', 'Telefono', 'RFC', 'Domicilio'], 'required'],
            [['Nombre', 'EMail', 'Telefono', 'RFC', 'Domicilio'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nombre' => 'Nombre',
            'EMail' => 'E Mail',
            'Telefono' => 'Telefono',
            'RFC' => 'Rfc',
            'Domicilio' => 'Domicilio',
        ];
    }
}
