<?php

use yii\db\Migration;

/**
 * Class m221017_045036_create_table_slider
 */
class m221017_045036_create_table_slider extends Migration
{
    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'img' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('slider');
    }
}
