<?php

namespace App\Http\Controllers\Auth;

use App\Models\Nurse;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;

class MainRegisterController extends Controller
{
    //

    public function registerPage()
    {
        return view('app.preview');
    }




    public function registerAsDoctor()
    {

        return view('Auth.register_doctor');


    }

    public function registerAsPatient()
    {
        return view('Auth.register_patient');

    }

    public function registerAsPathogen()
    {
        return view('Auth.register_pathogen');
    }

    public function storeDoctor(StoreDoctorRequest $request)
    {
        // Create a new Doctor instance and fill it with the validated request data
        $doctor = Doctor::create([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'degree' => $request->degree,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Optionally, you can return a success message along with redirecting
        return redirect()->route('register.as.doctor')->with('success', 'Your data saved successfully');
    }
    
    public function storeNurse(StoreDoctorRequest $request)
    {
        // Create a new Doctor instance and fill it with the validated request data
        $doctor = Nurse::create([
            'name' => $request->name,
            'national_id' => $request->national_id,
            'degree' => $request->degree,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Optionally, you can return a success message along with redirecting
        return redirect()->route('register.as.pathogen')->with('success', 'Your data saved successfully');
    }












}
