<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%divisi}}`.
 */
class m241108_024014_create_divisi_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%divisi}}', [
            'id' => $this->primaryKey(),
            'nama_divisi' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%divisi}}');
    }
}
