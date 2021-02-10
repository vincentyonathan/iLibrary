<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table-> bigIncrements('iD_Peminjaman');
            $table -> unsignedBigInteger('iD_Pelanggan');
            $table -> foreign ('iD_Pelanggan') -> references ('iD_Pelanggan')-> on ('pelanggan');
            $table -> unsignedBigInteger('iD_Pegawai');
            $table -> foreign ('iD_Pegawai') -> references ('iD_Pegawai')-> on ('pegawai');
            $table -> date('Tanggal_Peminjaman');
            $table -> date('Tanggal_JatuhTempo');
            $table -> date('Tanggal_Pengembalian');
            $table -> float('Denda_Peminjaman');
            $table -> float('Denda_Kerusakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
