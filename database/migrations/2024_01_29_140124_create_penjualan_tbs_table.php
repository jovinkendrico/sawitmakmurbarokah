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
        Schema::create('penjualan_tbs', function (Blueprint $table) {
            $table->id();
            $table->string('periodebulan');
            $table->year('periodetahun');
            $table->enum('rotasi',[1,2,3]);
            $table->date('tanggal');
            $table->integer('id_armada');
            $table->integer('id_supplier')->nullable();
            $table->integer('id_pks');
            $table->integer('weighin');
            $table->integer('weighout');
            $table->integer('netgross');
            $table->integer('penalty');
            $table->integer('netweigh');
            $table->string('grade')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->bigInteger('total')->nullable();
            $table->float('pphpercentage',3,2)->nullable();
            $table->bigInteger('pph')->nullable();
            $table->bigInteger('fee')->nullable();
            $table->bigInteger('netto')->nullable();
            $table->enum('status',['N','Y']);
            $table->bigInteger('pelunasan')->nullable();
            $table->date('tgllunas')->nullable();
            $table->string('ketlunas')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan_tbs');
    }
};
