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
        Schema::create('userbalance', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->string('order_id');
            $table->string('status');
            $table->string('status_code');
            $table->string('user_id');
            $table->string('email');
            $table->integer('amount');
            $table->string('payment_type');
            $table->string('payment_code')->nullable();
            $table->string('pdf_url')->nullable();
            $table->string('va_bank')->nullable();
            $table->string('va_number')->nullable();
            $table->string('date');
            $table->string('month');
            $table->integer('totalsupportedchild');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userbalance');
    }
};
