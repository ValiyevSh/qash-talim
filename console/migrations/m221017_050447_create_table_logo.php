<?php

use yii\db\Migration;

/**
 * Class m221017_050447_create_table_logo
 */
class m221017_050447_create_table_logo extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%logo}}', [
            'id' => $this->primaryKey(),
            'img' => $this->string(127),
            'tel' => $this->float(),
            'email' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%logo_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'name' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_logo_lang', '{{%logo_lang}}', 'owner_id', '{{%logo}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_logo_lang', '{{%logo_lang}}');
        $this->dropTable('{{%logo_lang}}');
        $this->dropTable('{{%logo}}');
    }
}
