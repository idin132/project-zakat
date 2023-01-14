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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_zakat');
            $table->string('nama_muzakki')->default('null');
            $table->string('no_hp')->default('null');
            $table->string('email')->default('null');
            $table->string('jumlah');
            $table->string('metode_pembayaran')->default('null');
            $table->string('bukti_pembayaran')->nullable();
            $table->string('status')->default('1');
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
        Schema::dropIfExists('pembayarans');
    }
};
