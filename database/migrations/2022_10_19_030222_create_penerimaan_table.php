<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tgl_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('penghasilan');
            $table->string('jumlah_anak');
            $table->string('jenis_zakat');
            $table->string('jumlah');
            $table->string('ashnaf');
            $table->string('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaans');
    }
};
