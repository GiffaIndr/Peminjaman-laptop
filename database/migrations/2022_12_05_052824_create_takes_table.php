<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('nama');
            $table->string('nis');
            $table->string('saksi');
            $table->string('rayon');
            $table->string('keperluan');
            $table->date('tanggal_pinjam');
            $table->date('done_time')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('takes');
    }
}
