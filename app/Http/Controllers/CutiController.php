<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CutiController extends Controller
{
    public function preview()
    {
        // data dummy dulu, nanti diganti dari database
        $data = [
            'tanggal_surat' => now()->translatedFormat('d F Y'),
            'kepala_sekolah' => 'Andromeda Ken Prabuhening, S.Pd, M.Pd',
            'nip_kepsek' => '19900427 201903 2 013',
            'nama_sekolah' => 'SMP Negeri 9 Denpasar',
            'pegawai' => [
                'nama' => 'I Gusti Ayu Wandi Septiari, S.Pd',
                'nip' => '-',
                'jabatan_pangkat_gol' => 'Guru Honorer',
                'masa_kerja' => '6 Bulan',
                'unit_kerja' => 'SMP Negeri 9 Denpasar',
            ],
            'jenis_cuti' => 'tahunan',
            'alasan' => 'Mengantar orang tua ke rumah sakit untuk keperluan pemeriksaan/berobat',
            'lama_hari' => 1,
            'tanggal_mulai' => '27 Januari 2026',
            'tanggal_selesai' => '27 Januari 2026',
            'sisa' => ['n2' => 0, 'n1' => 0, 'n' => 11],
            'alamat_selama_cuti' => 'Jl. Prof. Dr. Ida Bagus Mantra No.99, Negari, Kec. Banjarangkan, Kabupaten Klungkung, Bali 80752.',
            'telp' => '082145231162',
            'status' => 'disetujui',
        ];

        return view('cuti.preview', $data);
    }
}
