<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id
 * @property string $nama_karyawan
 * @property string $email
 * @property string $alamat
 * @property string $telepon
 * @property string $nik
 * @property string $jabatan
 * @property int $divisi_id
 * @property string $tgl_bergabung
 *
 * @property Divisi $divisi
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_karyawan', 'email', 'alamat', 'telepon', 'nik', 'jabatan', 'divisi_id', 'tgl_bergabung'], 'required'],
            [['divisi_id'], 'integer'],
            [['tgl_bergabung'], 'safe'],
            [['nama_karyawan', 'email', 'alamat', 'jabatan'], 'string', 'max' => 255],
            [['telepon'], 'string', 'max' => 12],
            [['nik'], 'string', 'max' => 16],
            [['divisi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Divisi::className(), 'targetAttribute' => ['divisi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_karyawan' => 'Nama Karyawan',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'nik' => 'NIK',
            'jabatan' => 'Jabatan',
            'divisi_id' => 'Nama Divisi',
            'tgl_bergabung' => 'Tgl Bergabung',
        ];
    }

    /**
     * Gets query for [[Divisi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDivisi()
    {
        return $this->hasOne(Divisi::className(), ['id' => 'divisi_id']);
    }
}
