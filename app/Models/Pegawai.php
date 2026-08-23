<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['nama', 'nip', 'jabatan_pangkat_gol', 'unit_kerja', 'masa_kerja', 'telp', 'alamat'];

    public function cutis()
    {
        return $this->hasMany(Cuti::class);
    }
}
