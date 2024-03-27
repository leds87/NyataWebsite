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
        Schema::create('subscriptionpayments', function (Blueprint $table) {
            $table->id();
            $table->string('subscription_id');
            $table->string('period');
            $table->string('childid');
            $table->string('amount');
            $table->string('status');
            $table->string('since');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptionpayments');
    }
};
