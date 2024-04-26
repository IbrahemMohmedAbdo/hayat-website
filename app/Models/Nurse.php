<?php

namespace App\Models;

use App\Traits\SendsOTP;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nurse extends Model
{
    use HasFactory ,SendsOTP ;



    protected $fillable = [
        'name', 'age', 'national_id', 'phone_number', 'password', 'gender', 'degree', 'email'
    ];
}
