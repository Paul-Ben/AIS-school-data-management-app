<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    use HasFactory;
    protected $fillable = ['sessionName', 'regNumber', 'firstName', 'lastName',
     'term_fee','Amount_paid',  'sclass', 'fee_status'];
}
