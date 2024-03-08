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
        Schema::create('admindata', function (Blueprint $table) {
            $table->id();
            // $table->string('admin_id');
            $table->string('name');
            $table->string('address');
            $table->string('slug')->nullable();
            $table->string('password');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('role');
            $table->string('note');
            $table->string('log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admindata');
    }
};
