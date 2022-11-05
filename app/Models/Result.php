<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['regNumber', 'fullName', 'sessionName', 'term', 'sclass',
                'termending', 'termbegins', 'subject1', 'subject1_1st_ca', 'subject1_2nd_ca', 'subject1_project',
            'subject1_exam', 'subject1_overall', 'subject1_Grade', 'subject1_remarks',
            'subject2', 'subject2_1st_ca', 'subject2_2nd_ca', 'subject2_project',
            'subject2_exam', 'subject2_overall', 'subject2_Grade', 'subject2_remarks',
            'subject3', 'subject3_1st_ca', 'subject3_2nd_ca', 'subject3_project',
            'subject3_exam', 'subject3_overall', 'subject3_Grade', 'subject3_remarks', 
            'subject4', 'subject4_1st_ca', 'subject4_2nd_ca', 'subject4_project',
            'subject4_exam', 'subject4_overall', 'subject4_Grade', 'subject4_remarks',
            'subject5', 'subject5_1st_ca', 'subject5_2nd_ca', 'subject5_project',
            'subject5_exam', 'subject5_overall', 'subject5_Grade', 'subject5_remarks',
            'subject6', 'subject6_1st_ca', 'subject6_2nd_ca', 'subject6_project',
            'subject6_exam', 'subject6_overall', 'subject6_Grade', 'subject6_remarks',
            'subject7', 'subject7_1st_ca', 'subject7_2nd_ca', 'subject7_project',
            'subject7_exam', 'subject7_overall', 'subject7_Grade', 'subject7_remarks',
            'subject8', 'subject8_1st_ca', 'subject8_2nd_ca', 'subject8_project',
            'subject8_exam', 'subject8_overall', 'subject8_Grade', 'subject8_remarks',
            'subject9', 'subject9_1st_ca', 'subject9_2nd_ca', 'subject9_project',
            'subject9_exam', 'subject9_overall', 'subject9_Grade', 'subject9_remarks',
        'tComment', 'htComment'];
}
