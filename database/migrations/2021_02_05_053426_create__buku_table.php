<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_buku', function (Blueprint $table) {
            $table->id('ISBN/NISN');
            $table -> string ('Kondisi_Buku');
            $table -> string ('Status_Buku');
            $table -> unsignedBigInteger('iD_DetilBuku');
            $table -> foreign('iD_DetilBuku')-> references('iD_DetilBuku')-> on ('_detil_buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_buku');
    }
}
