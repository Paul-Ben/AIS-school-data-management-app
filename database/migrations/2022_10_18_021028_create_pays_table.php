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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->string('sessionName');
            $table->string('regNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('sclass');
            $table->string('first_term_fee');
            $table->string('second_term_fee');
            $table->string('third_term_fee');
            $table->string('firstAmount');
            $table->string('secondAmount');
            $table->string('thirdAmount');
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
        Schema::dropIfExists('pays');
    }
};
