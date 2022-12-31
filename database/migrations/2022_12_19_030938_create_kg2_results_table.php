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
        Schema::create('kg2_results', function (Blueprint $table) {
            $table->id();
            $table->string('regNumber', 15);
            $table->string('fullName');
            $table->string('sessionName', 10);
            $table->string('term', 12 );
            $table->string('sclass');
            $table->date('termending');
            $table->date('termbegins');
            $table->string('subject1', 35);
            $table->string('subject1_assessment', 5);
            $table->string('subject1_exam', 5);
            $table->string('subject1_overall', 5);
            $table->string('subject1_grade', 3);
            $table->string('subject1_remarks', 10);
            $table->string('subject2', 35);
            $table->string('subject2_assessment', 5);
            $table->string('subject2_exam', 5);
            $table->string('subject2_overall', 5);
            $table->string('subject2_grade', 3);
            $table->string('subject2_remarks', 10);
            $table->string('subject3', 35);
            $table->string('subject3_assessment', 5);
            $table->string('subject3_exam', 5);
            $table->string('subject3_overall', 5);
            $table->string('subject3_grade', 3);
            $table->string('subject3_remarks', 10);
            $table->string('subject4', 35);
            $table->string('subject4_assessment', 5);
            $table->string('subject4_exam', 5);
            $table->string('subject4_overall', 5);
            $table->string('subject4_grade', 3);
            $table->string('subject4_remarks', 10);
            $table->string('subject5', 35);
            $table->string('subject5_assessment', 5);
            $table->string('subject5_exam', 5);
            $table->string('subject5_overall', 5);
            $table->string('subject5_grade', 3);
            $table->string('subject5_remarks', 10);
            $table->string('subject6', 35);
            $table->string('subject6_assessment', 5);
            $table->string('subject6_exam', 5);
            $table->string('subject6_overall', 5);
            $table->string('subject6_grade', 3);
            $table->string('subject6_remarks', 10);
            $table->string('subject7', 35);
            $table->string('subject7_assessment', 5);
            $table->string('subject7_exam', 5);
            $table->string('subject7_overall', 5);
            $table->string('subject7_grade', 3);
            $table->string('subject7_remarks', 10);
            $table->string('subject8', 35);
            $table->string('subject8_assessment', 5);
            $table->string('subject8_exam', 5);
            $table->string('subject8_overall', 5);
            $table->string('subject8_grade', 3);
            $table->string('subject8_remarks', 10);
            $table->string('subject9', 35);
            $table->string('subject9_assessment', 5);
            $table->string('subject9_exam', 5);
            $table->string('subject9_overall', 5);
            $table->string('subject9_grade', 3);
            $table->string('subject9_remarks', 10);
            //general character traits
            $table->string('punctuality',2);
            $table->string('neatness',2);
            $table->string('mental_ability',2);
            $table->string('cooperation_with_others',2);
            $table->string('attentiveness',2);
            $table->string('speak_out',2);
            $table->string('memory_work',2);
            $table->string('attitude_to_schoolwork',2);
            $table->string('response_to_homework',2);
            $table->string('sports',2);
            $table->string('no_of_school_days');
            $table->string('no_days_absent');  
            $table->string('teachers_comments');                     
            $table->string('head_teachers_comments');   
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
        Schema::dropIfExists('kg2_results');
    }
};
