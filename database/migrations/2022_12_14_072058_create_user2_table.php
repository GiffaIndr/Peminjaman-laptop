<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user2', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->rememberToken();
            $table->string('email')->unique;
            $table->string('password');
            $table->string('name');
            $table->string('roles');
            $table->string('address');
            $table->string('phone');
            $table->string('avatar');
            $table->enum('status', ['ACTIVE', 'INACTIVE']);
            // $table->timestamps('created_at');
            // $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user2');
    }
}
