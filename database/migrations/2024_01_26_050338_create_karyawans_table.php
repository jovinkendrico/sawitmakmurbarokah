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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('alamat');
            $table->enum('jk',['l','p']);
            $table->enum('status',['y','n'])->default('y');
            $table->enum('jabatan',["Panen","Perawatan","Muat","Supir","Kernek Supir","Mandor Panen","Mandor Perawatan","Krani Admin","Operator Alat Berat","Helver Alat Berat","Manager","Mandor Lapangan","Centeng"]);
            $table->date('tglmasuk');
            $table->date('tglkeluar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
