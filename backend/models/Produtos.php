<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property string $nome
 * @property float $preco
 * @property int $idcategoria
 *
 * @property Categorias $idcategoria0
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'preco', 'idcategoria'], 'required'],
            [['preco'], 'number'],
            [['idcategoria'], 'integer'],
            [['nome'], 'string', 'max' => 80],
            [['idcategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['idcategoria' => 'id']],
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
            'preco' => 'Preco',
            'idcategoria' => 'Categorias',
        ];
    }

    /**
     * Gets query for [[Idcategoria0]].
     *
     * @return \yii\db\ActiveQuery|CategoriasQuery
     */
    public function getIdcategoria0()
    {
        return $this->hasOne(Categorias::className(), ['id' => 'idcategoria']);
    }

    /**
     * {@inheritdoc}
     * @return ProdutosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutosQuery(get_called_class());
    }
}
