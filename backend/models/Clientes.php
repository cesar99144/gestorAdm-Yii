<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $id
 * @property string $nome
 * @property string $cidade
 * @property string $estado
 * @property string $logradouro
 * @property int|null $celular
 * @property string $email
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
            [['nome', 'cidade', 'estado', 'logradouro', 'email'], 'required'],
            [['celular'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['cidade'], 'string', 'max' => 80],
            [['estado', 'logradouro'], 'string', 'max' => 70],
            [['email'], 'string', 'max' => 254],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'logradouro' => 'Logradouro',
            'celular' => 'Celular',
            'email' => 'Email',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ClientesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClientesQuery(get_called_class());
    }
}
