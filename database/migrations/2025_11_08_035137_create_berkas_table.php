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
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->foreign('siswa_id')->references('id')->on('calon_siswas')->onDelete('cascade');
            $table->string('jenis_berkas'); // contoh: 'akta_lahir', 'kk', 'foto', 'ktp_ortu'
            $table->string('path'); // contoh: 'akta_lahir', 'kk', 'foto', 'ktp_ortu'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas');
    }
};
