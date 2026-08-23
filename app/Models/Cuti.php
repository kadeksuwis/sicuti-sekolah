<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = [
        'pegawai_id',
        'jenis_cuti',
        'alasan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lama_hari',
        'alamat_selama_cuti',
        'telp',
        'sisa_n2',
        'sisa_n1',
        'sisa_n',
        'status',
        'tanggal_surat'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
