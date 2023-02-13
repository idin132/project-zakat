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
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->bigInteger('id_muzakki')->unsigned()->nullable();
            $table->foreign('id_muzakki')->references('id_muzakki')->on('muzakki');
        });
        Schema::table('penerimaan', function (Blueprint $table) {
            $table->bigInteger('id_mustahiq')->unsigned()->nullable();
            $table->foreign('id_mustahiq')->references('id_mustahiq')->on('mustahiq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
