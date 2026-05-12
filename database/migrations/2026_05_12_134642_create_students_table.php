<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // ID otomatis [cite: 54, 320, 1023]
            $table->string('name'); // Menambahkan kolom Nama [cite: 55, 321, 1024]
            $table->string('prodi'); // Menambahkan kolom Prodi (pengganti email) [cite: 55, 1024]
            $table->timestamps(); // Kolom created_at & updated_at [cite: 57, 324, 1027]
        });
    }

    /**
     * Batalkan migrasi (menghapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('students'); // Menghapus tabel jika di-rollback [cite: 62, 329, 1032]
    }
};