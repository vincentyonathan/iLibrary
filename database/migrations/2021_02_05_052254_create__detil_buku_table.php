<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_detil_buku', function (Blueprint $table) {
            $table-> bigIncrements('iD_DetilBuku');
            $table -> string('Judul_Buku');
            $table -> smallInteger ('Tahun_Terbit');
            $table -> string ('Author');
            $table -> string('Penerbit');
            $table -> string('Kategori');
            $table -> integer('Jumlah_Halaman');
            $table -> longText ('Sinopsis');
            $table -> integer('Buku_Dipinjam');
            $table -> integer('Buku_Tersedia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_detil_buku');
    }
}
