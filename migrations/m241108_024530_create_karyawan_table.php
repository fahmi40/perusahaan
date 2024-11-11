<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%karyawan}}`.
 */
class m241108_024530_create_karyawan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%karyawan}}', [
            'id' => $this->primaryKey(),
            'nama_karyawan' => $this->string(255)->notNull(),
            'jenis_kelamin' => $this->string(9)->notNull(),
            'email' => $this->string(255)->notNull(),
            'alamat' => $this->string(255)->notNull(),
            'telepon' => $this->string(12)->notNull(),
            'nik' => $this->string(16)->notNull(),
            'jabatan' => $this->string(255)->notNull(),
            'divisi_id' => $this->integer(11)->notNull(),
            'tgl_bergabung' => $this->date()->notNull(),
            'tgl_lahir' => $this->date()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-karyawan_divisi_id',
            'karyawan',
            'divisi_id',
            'divisi',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%karyawan}}');
    }
}
