<?php

use yii\db\Migration;

/**
 * Class m221017_050106_create_table_useful_link
 */
class m221017_050106_create_table_useful_link extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%useful_link}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'links' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%useful_link_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_useful_link_lang', '{{%useful_link_lang}}', 'owner_id', '{{%useful_link}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_useful_link_lang', '{{%useful_link_lang}}');
        $this->dropTable('{{%useful_link_lang}}');
        $this->dropTable('{{%useful_link}}');
    }
}
