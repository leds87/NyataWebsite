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
        Schema::create('userdata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('password');
            $table->bigInteger('phone');
            $table->string('tier');
            $table->string('note');
            $table->date('since');
            $table->string('status')->nullable();
            $table->string('log');

        });
    }
            // $table->foreignId('children_id')->nullable();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdata');
    }
};
