<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = ['sessionName', 'regNumber', 'firstName', 'lastName', 'firstAmount', 'secondAmount', 'thirdAmount', 'sclass', 'first_term_fee', 'second_term_fee', 'third_term_fee'];
}
