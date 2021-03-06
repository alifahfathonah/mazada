<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    public $primaryKey = 'id_nis_aktif';
    protected $table = 'tbl_siswa_aktif';
	protected $fillable = array(
        'nama', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'agama', 'sekolah_asal',
        'kelas_diterima', 'tgl_diterima', 'alamat', 'nama_ayah', 'nama_ibu',
        'pekerjaan_ayah', 'pekerjaan_ibu', 'alamat_ortu', 'nama_wali', 
        'alamat_wali', 'kd_tahun');



	
	public function tahun() {
		return $this->belongsTo('App\DataTahun', 'kd_tahun');
	}
}
