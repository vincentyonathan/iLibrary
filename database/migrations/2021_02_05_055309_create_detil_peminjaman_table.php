<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('iD_DetilPeminjaman');
            $table -> unsignedBigInteger('NISN_Buku');
            $table -> foreign('NISN_Buku')-> references ('ISBN/NISN') -> on ('_buku');
            $table -> string ('Status_Buku');
            #$table -> unsignedBigInteger('iD_Manager');
            #$table -> foreign ('iD_Manager') -> references ('iD_Manager')-> on ('_manager');
            $table -> unsignedBigInteger('iD_Peminjaman');
            $table -> foreign ('iD_Peminjaman') -> references ('iD_Peminjaman')-> on ('_peminjaman');
            $table -> string ('Kondisi_BukuAwal');
            $table -> string ('Kondisi_BukuAkhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_detil_peminjaman');
    }
}
