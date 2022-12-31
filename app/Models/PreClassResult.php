<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreClassResult extends Model
{
    use HasFactory;
    protected $fillable = ['regNumber', 'fullName', 'sessionName', 'term', 'sclass',
    'termending', 'termbegins', 'subject1', 'subject1_exam', 'subject1_grade', 'subject1_remarks', 'subject2',
    'subject2_exam', 'subject2_grade', 'subject2_remarks', 'handwriting', 'subject3', 'subject3_exam', 'subject3_grade',
    'subject3_remarks', 'recognition', 'subject4', 'subject4_exam', 'subject4_grade', 'subject4_remarks', 'memory_work', 'subject5',
    'subject5_exam', 'subject5_grade', 'subject5_remarks', 'response_to_homework', 'subject6', 'subject6_exam', 'subject6_grade',
    'subject6_remarks', 'speak_out', 'subject7', 'subject7_exam', 'subject7_grade', 'subject7_remarks', 'attentiveness', 'punctuality',
     'neatness', 'cooperation_with_others', 'teachers_comment',
    'head_teachers_comment', 'no_of_school_days', 'no_of_days_absent'];
}
