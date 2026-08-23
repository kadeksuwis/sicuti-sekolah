<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulir Cuti</title>
    <style>
        body { font-family: 'Times New Roman', serif; font-size: 13px; margin: 40px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 4px; }
        td, th { border: 1px solid #000; padding: 6px; vertical-align: top; }
        .no-border td { border: none; padding: 2px 6px; }
        .section-title { font-weight: bold; background: #f0f0f0; }
        .center { text-align: center; }
        .signature { text-align: center; margin-top: 20px; }
        h2 { text-align: center; }
    </style>
</head>
<body>

    <p style="text-align:right">Denpasar, {{ $tanggal_surat }}</p>
    <p>
        Kepada<br>
        Yth. Kepala {{ $nama_sekolah }}<br>
        di - <br>
        &nbsp;&nbsp;&nbsp;&nbsp;Denpasar
    </p>

    <h2>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</h2>

    {{-- I. DATA PEGAWAI --}}
    <table>
        <tr><th colspan="4" class="section-title">I. DATA PEGAWAI</th></tr>
        <tr>
            <td>Nama</td><td>{{ $pegawai['nama'] }}</td>
            <td>NIP</td><td>{{ $pegawai['nip'] }}</td>
        </tr>
        <tr>
            <td>Jabatan / Pangkat Gol</td><td>{{ $pegawai['jabatan_pangkat_gol'] }}</td>
            <td>Masa Kerja</td><td>{{ $pegawai['masa_kerja'] }}</td>
        </tr>
        <tr>
            <td>Unit Kerja</td><td colspan="3">{{ $pegawai['unit_kerja'] }}</td>
        </tr>
    </table>

    {{-- II. JENIS CUTI --}}
    <table>
        <tr><th colspan="4" class="section-title">II. JENIS CUTI YANG DIAMBIL**</th></tr>
        <tr>
            <td>1. Cuti Tahunan</td><td class="center">{{ $jenis_cuti === 'tahunan' ? '√' : '' }}</td>
            <td>2. Cuti Besar</td><td class="center">{{ $jenis_cuti === 'besar' ? '√' : '' }}</td>
        </tr>
        <tr>
            <td>3. Cuti Sakit</td><td class="center">{{ $jenis_cuti === 'sakit' ? '√' : '' }}</td>
            <td>4. Cuti Melahirkan</td><td class="center">{{ $jenis_cuti === 'melahirkan' ? '√' : '' }}</td>
        </tr>
        <tr>
            <td>5. Cuti Karena Alasan Penting</td><td class="center">{{ $jenis_cuti === 'alasan_penting' ? '√' : '' }}</td>
            <td>6. Cuti Di Luar Tanggungan Negara</td><td class="center">{{ $jenis_cuti === 'luar_tanggungan_negara' ? '√' : '' }}</td>
        </tr>
    </table>

    {{-- III. ALASAN --}}
    <table>
        <tr><th class="section-title">III. ALASAN CUTI</th></tr>
        <tr><td>{{ $alasan }}</td></tr>
    </table>

    {{-- IV. LAMANYA CUTI --}}
    <table>
        <tr><th colspan="6" class="section-title">IV. LAMANYA CUTI</th></tr>
        <tr>
            <td>Selama</td><td>{{ $lama_hari }} hari</td>
            <td>Mulai Tanggal</td><td>{{ $tanggal_mulai }}</td>
            <td>s/d</td><td>{{ $tanggal_selesai }}</td>
        </tr>
    </table>

    {{-- V. CATATAN CUTI --}}
    <table>
        <tr><th colspan="3" class="section-title">V. CATATAN CUTI***</th></tr>
        <tr><td>Tahun</td><td>Sisa</td><td>Keterangan</td></tr>
        <tr><td>N-2</td><td>{{ $sisa['n2'] }}</td><td></td></tr>
        <tr><td>N-1</td><td>{{ $sisa['n1'] }}</td><td></td></tr>
        <tr><td>N</td><td>{{ $sisa['n'] }}</td><td></td></tr>
    </table>

    {{-- VI. ALAMAT --}}
    <table>
        <tr><th colspan="2" class="section-title">VI. ALAMAT SELAMA MENJALANKAN CUTI</th></tr>
        <tr>
            <td>{{ $alamat_selama_cuti }}<br>TELP: {{ $telp }}</td>
            <td class="signature">
                Hormat saya,<br><br><br><br>
                ({{ $pegawai['nama'] }})<br>
                NIP. {{ $pegawai['nip'] }}
            </td>
        </tr>
    </table>

    {{-- VII. PERTIMBANGAN ATASAN --}}
    <table>
        <tr><th colspan="4" class="section-title">VII. PERTIMBANGAN ATASAN LANGSUNG**</th></tr>
        <tr>
            <td>DISETUJUI</td><td>PERUBAHAN****</td><td>DITANGGUHKAN****</td><td>TIDAK DISETUJUI****</td>
        </tr>
        <tr>
            <td class="center">{{ $status === 'disetujui' ? '√' : '' }}</td>
            <td class="center">{{ $status === 'perubahan' ? '√' : '' }}</td>
            <td class="center">{{ $status === 'ditangguhkan' ? '√' : '' }}</td>
            <td class="center">{{ $status === 'tidak_disetujui' ? '√' : '' }}</td>
        </tr>
    </table>

    <table class="no-border">
        <tr>
            <td class="signature">Disetujui<br>Kepala {{ $nama_sekolah }}</td>
        </tr>
        <tr>
            <td class="signature"><br><br><br><br>{{ $kepala_sekolah }}<br>NIP. {{ $nip_kepsek }}</td>
        </tr>
    </table>

</body>
</html>