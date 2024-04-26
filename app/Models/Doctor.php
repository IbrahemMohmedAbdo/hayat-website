<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\SendsOTP;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory,SendsOTP ;

    protected $fillable = [
        'name', 'age', 'national_id', 'phone_number', 'password', 'gender', 'degree', 'email'
    ];



    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function doctorPresenceDays()
    {
        return $this->hasMany(DoctorPresenceDay::class);
    }
}
