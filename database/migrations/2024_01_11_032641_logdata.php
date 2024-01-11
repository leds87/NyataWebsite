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
        Schema::create('logdata', function (Blueprint $table) {
            $table->id();
            $table->string('log_id')->nullable();
            $table->string('admin_id')->nullable();
            $table->string('name')->nullable();
            $table->string('action')->nullable();
            $table->string('data')->nullable();
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
