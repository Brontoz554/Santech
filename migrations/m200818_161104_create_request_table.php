<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%request}}`.
 */
class m200818_161104_create_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'phone' => $this->string('30')->notNull(),
            'name' => $this->string('120')->notNull(),
            'comment' => $this->string('400')->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%request}}');
    }
}
