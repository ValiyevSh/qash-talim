<?php

use yii\db\Migration;

/**
 * Class m221017_050726_create_table_about
 */
class m221017_050726_create_table_about extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%about}}', [
            'id' => $this->primaryKey(),


        ], $tableOptions);

        $this->createTable('{{%about_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_about_lang', '{{%about_lang}}', 'owner_id', '{{%about}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_about_lang', '{{%about_lang}}');
        $this->dropTable('{{%about_lang}}');
        $this->dropTable('{{%about}}');
    }
}
