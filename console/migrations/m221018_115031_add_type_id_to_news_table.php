<?php

use yii\db\Migration;

/**
 * Class m221018_115031_add_type_id_to_news_table
 */
class m221018_115031_add_type_id_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news', 'type_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('news', 'type_id');
    }
}
