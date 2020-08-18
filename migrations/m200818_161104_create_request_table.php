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
            'phone' => $this->string('11')->notNull(),
            'name' => $this->string('120')->notNull(),
            'comment' => $this->string('400')->defaultValue('Описание не указано'),
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
