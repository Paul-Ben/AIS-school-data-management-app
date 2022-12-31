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
        Schema::create('pre_class_results', function (Blueprint $table) {
            $table->id();
            $table->string('regNumber', 15);
            $table->string('fullName');
            $table->string('sessionName', 10);
            $table->string('term', 12 );
            $table->string('sclass');
            $table->date('termending');
            $table->date('termbegins');
            $table->string('subject1', 35);
            $table->string('subject1_exam', 5);
            $table->string('subject1_grade', 3);
            $table->string('subject1_remarks', 10);
            
            $table->string('subject2', 35);
            $table->string('subject2_exam', 5);
            $table->string('subject2_grade', 3);
            $table->string('subject2_remarks', 10);
            $table->string('handwriting', 2);
            $table->string('subject3', 35);
            $table->string('subject3_exam', 5);
            $table->string('subject3_grade', 3);
            $table->string('subject3_remarks', 10);
            $table->string('recognition', 2);
            $table->string('subject4', 35);
            $table->string('subject4_exam', 5);
            $table->string('subject4_grade', 3);
            $table->string('subject4_remarks', 10);
            $table->string('memory_work', 2);
            $table->string('subject5', 35);
            $table->string('subject5_exam', 5);
            $table->string('subject5_grade', 3);
            $table->string('subject5_remarks', 10);
            $table->string('response_to_homework', 2);
            $table->string('subject6', 35);
            $table->string('subject6_exam', 5);
            $table->string('subject6_grade', 3);
            $table->string('subject6_remarks', 10);
            $table->string('speak_out', 2);
            $table->string('subject7', 35);
            $table->string('subject7_exam', 5);
            $table->string('subject7_grade', 3);
            $table->string('subject7_remarks', 10);
            $table->string('attentiveness', 2);
          
            $table->string('punctuality', 2);
            $table->string('neatness',2);
            $table->string('cooperation_with_others', 2);
            $table->string('teachers_comment');
            $table->string('head_teachers_comment');
            $table->string('no_of_school_days');
            $table->string('no_of_days_absent');
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
        Schema::dropIfExists('pre_class_results');
    }
};
