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
        Schema::create('childrendata', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->string('location');
            $table->string('age');
            $table->string('story');
            $table->string('description');
            $table->string('status');
            $table->string('image')->nullable();
            $table->foreignId('support_by')->nullable();
            // $table->foreign('support_by')->references('id')->on('userdata')->onDelete('SET NULL'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('childrendata');
    }
};
