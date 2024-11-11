<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%perusahaan}}`.
 */
class m241108_014433_create_perusahaan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%perusahaan}}', [
            'id' => $this->primaryKey(),
            'nama_perusahaan' => $this->string(255)->notNull(),
            'alamat' => $this->string(255)->notNull(),
            'email_perusahaan' => $this->string(255)->notNull(),
            'website_perusahaan' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%perusahaan}}');
    }
}
