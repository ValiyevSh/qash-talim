<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sms_settings}}`.
 */
class m210828_063514_create_sms_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sms_settings}}', [
            'id' => $this->primaryKey(),
            'idn' => $this->string(100),
            'name' => $this->string(),
            'value' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->batchInsert('{{%sms_settings}}',
            ['idn', 'value', 'name'],
            [
                ['email', 'admin@example.com', 'Email'],
                ['password', 'your_password', 'Parol'],
                ['token', '', 'Token'],
            ]
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sms_settings}}');
    }
}
