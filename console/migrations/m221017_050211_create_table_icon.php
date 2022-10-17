<?php

use yii\db\Migration;

/**
 * Class m221017_050211_create_table_icon
 */
class m221017_050211_create_table_icon extends Migration
{
    public function up()
    {
        $this->createTable('icon', [
            'id' => $this->primaryKey(),
            'icon' => $this->string()->notNull(),
            'link' => $this->text(),
            'status' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('icon');
    }
}
