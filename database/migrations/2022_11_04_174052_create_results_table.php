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
            $table->string('subject1', 25);
            $table->string('subject1_1st_ca',5);
            $table->string('subject1_2nd_ca', 5);
            $table->string('subject1_project', 5);
            $table->string('subject1_exam', 5);
            $table->string('subject1_overall', 5);
            $table->string('subject1_Grade', 3);
            $table->string('subject1_remarks',10);
            $table->string('subject2',25);
            $table->string('subject2_1st_ca', 5);
            $table->string('subject2_2nd_ca', 5);
            $table->string('subject2_project', 5);
            $table->string('subject2_exam', 5);
            $table->string('subject2_overall', 5);
            $table->string('subject2_Grade', 3);
            $table->string('subject2_remarks', 10);
            $table->string('subject3', 25);
            $table->string('subject3_1st_ca', 5);
            $table->string('subject3_2nd_ca', 5);
            $table->string('subject3_project', 5);
            $table->string('subject3_exam', 5);
            $table->string('subject3_overall', 5);
            $table->string('subject3_Grade', 3);
            $table->string('subject3_remarks', 10);
            $table->string('subject4', 25);
            $table->string('subject4_1st_ca', 5);
            $table->string('subject4_2nd_ca', 5);
            $table->string('subject4_project', 5);
            $table->string('subject4_exam', 5);
            $table->string('subject4_overall', 5);
            $table->string('subject4_Grade', 3);
            $table->string('subject4_remarks', 10);
            $table->string('subject5', 25);
            $table->string('subject5_1st_ca', 5);
            $table->string('subject5_2nd_ca', 5);
            $table->string('subject5_project', 5);
            $table->string('subject5_exam', 5);
            $table->string('subject5_overall', 5);
            $table->string('subject5_Grade', 3);
            $table->string('subject5_remarks', 10);
            $table->string('subject6', 25);
            $table->string('subject6_1st_ca', 5);
            $table->string('subject6_2nd_ca', 5);
            $table->string('subject6_project', 5);
            $table->string('subject6_exam', 5);
            $table->string('subject6_overall', 5);
            $table->string('subject6_Grade', 3);
            $table->string('subject6_remarks', 10);
            $table->string('subject7', 25);
            $table->string('subject7_1st_ca', 5);
            $table->string('subject7_2nd_ca', 5);
            $table->string('subject7_project', 5);
            $table->string('subject7_exam', 5);
            $table->string('subject7_overall', 5);
            $table->string('subject7_Grade', 3);
            $table->string('subject7_remarks', 10);
            $table->string('subject8', 25);
            $table->string('subject8_1st_ca', 5);
            $table->string('subject8_2nd_ca', 5);
            $table->string('subject8_project', 5);
            $table->string('subject8_exam', 5);
            $table->string('subject8_overall', 5);
            $table->string('subject8_Grade', 3);
            $table->string('subject8_remarks', 10);
            $table->string('subject9', 25);
            $table->string('subject9_1st_ca', 5);
            $table->string('subject9_2nd_ca', 5);
            $table->string('subject9_project', 5);
            $table->string('subject9_exam', 5);
            $table->string('subject9_overall', 5);
            $table->string('subject9_Grade', 3);
            $table->string('subject9_remarks', 10);
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
