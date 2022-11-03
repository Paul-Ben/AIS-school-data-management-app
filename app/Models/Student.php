<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['regNumber', 'firstName', 'middleName', 'gender','lasttName', 'dob','nationality', 'soorigin', 'lga',
    'allergies', 'imagename', 'parentsPhone', 'sclass'];
}
