<?php

use yii\db\Migration;

/**
 * Class m221017_045742_create_table_news_category
 */
class m221017_045742_create_table_news_category extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%news_category}}', [
            'id' => $this->primaryKey(),
            'slug' => $this->string(127),

        ], $tableOptions);

        $this->createTable('{{%news_category_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'title' => $this->string(255)->notNull(),

        ], $tableOptions);

        $this->addForeignKey('fk_news_category_lang', '{{%news_category_lang}}', 'owner_id', '{{%news_category}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_news_category_lang', '{{%news_category_lang}}');
        $this->dropTable('{{%news_category_lang}}');
        $this->dropTable('{{%news_category}}');
    }
}
