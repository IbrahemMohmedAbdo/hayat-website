<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\SendsOTP;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory,SendsOTP ;

    protected $fillable = [
        'name', 'age', 'national_iD', 'phone_number', 'email', 'password', 'gender', 'diseases', 'address', 'smoker'
    ];
}
