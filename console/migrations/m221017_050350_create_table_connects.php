<?php

use yii\db\Migration;

/**
 * Class m221017_050350_create_table_connects
 */
class m221017_050350_create_table_connects extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%connects}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(127),
            'status' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%connects_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_connects_lang', '{{%connects_lang}}', 'owner_id', '{{%connects}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_connects_lang', '{{%connects_lang}}');
        $this->dropTable('{{%connects_lang}}');
        $this->dropTable('{{%connects}}');
    }
}
