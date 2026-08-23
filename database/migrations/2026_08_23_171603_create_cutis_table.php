<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawai_id')->constrained('pegawai')->cascadeOnDelete();
            $table->enum('jenis_cuti', [
                'tahunan',
                'besar',
                'sakit',
                'melahirkan',
                'alasan_penting',
                'luar_tanggungan_negara'
            ]);
            $table->text('alasan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('lama_hari');
            $table->text('alamat_selama_cuti')->nullable();
            $table->string('telp')->nullable();
            // catatan cuti (sisa N/N-1/N-2 saat pengajuan ini dibuat)
            $table->integer('sisa_n2')->default(0);
            $table->integer('sisa_n1')->default(0);
            $table->integer('sisa_n')->default(0);
            $table->enum('status', ['diajukan', 'disetujui', 'perubahan', 'ditangguhkan', 'tidak_disetujui'])
                ->default('diajukan');
            $table->date('tanggal_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
