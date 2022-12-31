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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('regNumber', 15);
            $table->string('fullName');
            $table->string('sessionName', 10);
            $table->string('term', 12 );
            $table->string('sclass');
            $table->date('termending');
            $table->date('termbegins');
            $table->string('subject1', 30);
            $table->string('subject1_1st_ca',5);
            $table->string('subject1_2nd_ca', 5);
            $table->string('subject1_project', 5);
            $table->string('subject1_exam', 5);
            $table->string('subject1_overall', 5);
            $table->string('subject1_Grade', 3);
            $table->string('subject1_remarks',10);
            $table->string('subject2',30);
            $table->string('subject2_1st_ca', 5);
            $table->string('subject2_2nd_ca', 5);
            $table->string('subject2_project', 5);
            $table->string('subject2_exam', 5);
            $table->string('subject2_overall', 5);
            $table->string('subject2_Grade', 3);
            $table->string('subject2_remarks', 10);
            $table->string('subject3', 30);
            $table->string('subject3_1st_ca', 5);
            $table->string('subject3_2nd_ca', 5);
            $table->string('subject3_project', 5);
            $table->string('subject3_exam', 5);
            $table->string('subject3_overall', 5);
            $table->string('subject3_Grade', 3);
            $table->string('subject3_remarks', 10);
            $table->string('subject4', 30);
            $table->string('subject4_1st_ca', 5);
            $table->string('subject4_2nd_ca', 5);
            $table->string('subject4_project', 5);
            $table->string('subject4_exam', 5);
            $table->string('subject4_overall', 5);
            $table->string('subject4_Grade', 3);
            $table->string('subject4_remarks', 10);
            $table->string('subject5', 30);
            $table->string('subject5_1st_ca', 5);
            $table->string('subject5_2nd_ca', 5);
            $table->string('subject5_project', 5);
            $table->string('subject5_exam', 5);
            $table->string('subject5_overall', 5);
            $table->string('subject5_Grade', 3);
            $table->string('subject5_remarks', 10);
            $table->string('subject6', 30);
            $table->string('subject6_1st_ca', 5);
            $table->string('subject6_2nd_ca', 5);
            $table->string('subject6_project', 5);
            $table->string('subject6_exam', 5);
            $table->string('subject6_overall', 5);
            $table->string('subject6_Grade', 3);
            $table->string('subject6_remarks', 10);
            $table->string('subject7', 30);
            $table->string('subject7_1st_ca', 5);
            $table->string('subject7_2nd_ca', 5);
            $table->string('subject7_project', 5);
            $table->string('subject7_exam', 5);
            $table->string('subject7_overall', 5);
            $table->string('subject7_Grade', 3);
            $table->string('subject7_remarks', 10);
            // skills
            $table->string('reading', 2);
            $table->string('handwriting', 2);
            // General character traits
            $table->string('punctuality',2);
            $table->string('neatness',2);
            $table->string('mental_ability',2);
            $table->string('cooperation_with_others', 2);
            $table->string('attentiveness',2);
            $table->string('speak_out',2);
            $table->string('memory_work',2);
            $table->string('attitude_to_schoolwork',2);
            $table->string('response_to_homework',2);
            $table->string('sports',2);
            $table->string('no_of_school_days')->nullable();
            $table->string('no_days_absent')->nullable(); 
            $table->string('tComment');
            $table->string('htComment');
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
        Schema::dropIfExists('results');
    }
};
