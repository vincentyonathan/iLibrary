<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->bigIncrements('iD_Pelanggan');
            $table -> string('Nama_Pelanggan');
            $table -> string('Nomor_Telepon');
            $table -> string('Email') -> unique();
            $table -> string('Password');
            $table->rememberToken();
            $table -> string('Status_Member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
