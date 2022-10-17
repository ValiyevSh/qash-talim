<?php

use yii\db\Migration;

/**
 * Class m221017_123447_create_table_leader
 */
class m221017_123447_create_table_leader extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%leader}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'tel' => $this->string(127),
        ], $tableOptions);

        $this->createTable('{{%leader_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'reception' => $this->string(255)->notNull(),
            'job' =>$this->string(255)->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_leader_lang', '{{%leader_lang}}', 'owner_id', '{{%leader}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_leader_lang', '{{%leader_lang}}');
        $this->dropTable('{{%leader_lang}}');
        $this->dropTable('{{%leader}}');
    }

}
