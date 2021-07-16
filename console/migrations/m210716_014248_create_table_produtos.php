<?php

use yii\db\Migration;

/**
 * Class m210716_014248_create_table_produtos
 */
class m210716_014248_create_table_produtos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%produtos}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(80)->notNull(),
            'preco' => $this->double()->notNull(),
            'idcategoria' => $this->integer()->notNull(),
        ]);

        //adicionar chave estrangeira
        $this->addForeignKey(
            'fk-categoria-produto', 
             'produtos',
             'idcategoria',
             'categorias',
             'id',
             'CASCADE'
         );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210716_014248_create_table_produtos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210716_014248_create_table_produtos cannot be reverted.\n";

        return false;
    }
    */
}
