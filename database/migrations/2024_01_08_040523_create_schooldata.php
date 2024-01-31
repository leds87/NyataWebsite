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
        Schema::create('schooldata', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->string('location');
            $table->string('address');
            $table->integer('children');
            $table->string('status');
            $table->integer('required_donation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schooldata');
    }
};
