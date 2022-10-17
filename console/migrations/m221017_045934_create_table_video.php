<?php

use yii\db\Migration;

/**
 * Class m221017_045934_create_table_video
 */
class m221017_045934_create_table_video extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%video}}', [
            'id' => $this->primaryKey(),
            'video' => $this->string(127),
            'date' => $this->integer(),
            'status' => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%video_lang}}', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer()->notNull(),
            'language' => $this->string(6)->notNull(),
            'content' => $this->text(),
        ], $tableOptions);

        $this->addForeignKey('fk_video_lang', '{{%video_lang}}', 'owner_id', '{{%video}}', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk_video_lang', '{{%video_lang}}');
        $this->dropTable('{{%video_lang}}');
        $this->dropTable('{{%video}}');
    }
}
