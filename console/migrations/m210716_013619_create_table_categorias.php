<?php

use yii\db\Migration;

/**
 * Class m210716_013619_create_table_categorias
 */
class m210716_013619_create_table_categorias extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categorias}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(80)->notNull(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210716_013619_create_table_categorias cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210716_013619_create_table_categorias cannot be reverted.\n";

        return false;
    }
    */
}
