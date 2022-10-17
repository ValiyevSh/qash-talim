<?php

use yii\db\Migration;

/**
 * Class m221017_045839_create_table_indicator
 */
class m221017_045839_create_table_indicator extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%indicator}}', [
            'id' => $this->primaryKey(),
            'icon' => $this->string(127),
            'number' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%indicator_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_indicator_lang', '{{%indicator_lang}}', 'owner_id', '{{%indicator}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_indicator_lang', '{{%indicator_lang}}');
        $this->dropTable('{{%indicator_lang}}');
        $this->dropTable('{{%indicator}}');
    }
}
