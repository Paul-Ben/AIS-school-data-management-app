<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KG_1_2 extends Model
{
    use HasFactory;

    protected $fillable = ['regNumber', 'fullName', 'sessionName', 'term', 'sclass', 'termending', 'termbegins', 
    'subject1', 'subject1_assessment', 'subject1_exam', 'subject1_overall', 'subject1_grade',
    'subject1_remarks','subject2', 'subject2_assessment', 'subject2_exam', 'subject2_overall', 'subject2_grade', 'subject2_remarks', 'subject3', 'subject3_assessment', 'subject3_exam', 'subject3_overall',
     'subject3_grade', 'subject3_remarks', 'subject4', 'subject4_assessment', 'subject4_exam', 'subject4_overall',
     'subject4_grade', 'subject4_remarks', 'subject5', 'subject5_assessment', 'subject5_exam', 'subject5_overall',
     'subject5_grade', 'subject5_remarks', 'subject6', 'subject6_assessment', 'subject6_exam', 'subject6_overall',
     'subject6_grade', 'subject6_remarks', 'subject7', 'subject7_assessment', 'subject7_exam', 'subject7_overall',
     'subject7_grade', 'subject7_remarks', 'subject8', 'subject8_assessment', 'subject8_exam', 'subject8_overall',
     'subject8_grade', 'subject8_remarks', 'subject9', 'subject9_assessment', 'subject9_exam', 'subject9_overall',
     'subject9_grade', 'subject9_remarks'];
}
