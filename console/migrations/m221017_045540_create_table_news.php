<?php

use yii\db\Migration;

/**
 * Class m221017_045540_create_table_news
 */
class m221017_045540_create_table_news extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(127),
            'date' => $this->integer(),
            'category_id' => $this->integer(),
            'status' => $this->integer(),
            'img' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable('{{%news_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_news_lang', '{{%news_lang}}', 'owner_id', '{{%news}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_news_lang', '{{%news_lang}}');
        $this->dropTable('{{%news_lang}}');
        $this->dropTable('{{%news}}');
    }
}
