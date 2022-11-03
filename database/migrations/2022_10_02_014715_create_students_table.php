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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('regNumber')->unipue();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lasttName');
            $table->string('gender')->nullable();
            $table->string('dob');
            $table->string('nationality');
            $table->string('soorigin');
            $table->string('lga');
            $table->string('allergies');
            $table->string('parentsPhone');
            $table->string('imagename');
            $table->string('sclass');
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
        Schema::dropIfExists('students');
    }
};
