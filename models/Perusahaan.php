<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perusahaan".
 *
 * @property int $id
 * @property string $nama_perusahaan
 * @property string $alamat
 * @property string $email_perusahaan
 * @property string $website_perusahaan
 */
class Perusahaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perusahaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_perusahaan', 'alamat', 'email_perusahaan', 'website_perusahaan'], 'required'],
            [['nama_perusahaan', 'alamat', 'email_perusahaan', 'website_perusahaan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_perusahaan' => 'Nama Perusahaan',
            'alamat' => 'Alamat',
            'email_perusahaan' => 'Email Perusahaan',
            'website_perusahaan' => 'Website Perusahaan',
        ];
    }
}
