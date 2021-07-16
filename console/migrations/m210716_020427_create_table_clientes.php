<?php

use yii\db\Migration;

/**
 * Class m210716_020427_create_table_clientes
 */
class m210716_020427_create_table_clientes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clientes}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'cidade' => $this->string(80)->notNull(),
            'estado' => $this->string(70)->notNull(),
            'logradouro' => $this->string(70)->notNull(),
            'celular' => $this->integer(30),
            'email' => $this->string(254)->notNull(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210716_020427_create_table_clientes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210716_020427_create_table_clientes cannot be reverted.\n";

        return false;
    }
    */
}
