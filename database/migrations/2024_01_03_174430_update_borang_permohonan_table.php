<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBorangPermohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borang_permohonans', function (Blueprint $table) {
            $table->id();
            $table->string("nama_pemohon", 100);
            $table->string("email_pemohon", 100);
            $table->string("phone", 13);
            $table->string("jawatan", 100);
            $table->string("unit_bahagian", 100);
            $table->string("nama_mesyuarat", 100);
            $table->string("nama_bilik", 100);
            $table->string("pengerusi", 100);
            $table->dateTime("dari");
            $table->dateTime("hingga");
            $table->string("bilangan_ahli", 100);
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
        Schema::dropIfExists('borang_permohonans');
    }
}
