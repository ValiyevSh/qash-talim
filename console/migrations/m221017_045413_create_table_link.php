<?php

use yii\db\Migration;

/**
 * Class m221017_045413_create_table_link
 */
class m221017_045413_create_table_link extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%link}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%link_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_link_lang', '{{%link_lang}}', 'owner_id', '{{%link}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_link_lang', '{{%link_lang}}');
        $this->dropTable('{{%link_lang}}');
        $this->dropTable('{{%link}}');
    }
}
