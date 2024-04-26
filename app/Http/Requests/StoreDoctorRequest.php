<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'national_id' => [
                'required',
                'string',
                'regex:/^\d{14}$/u', // تحقق من أن الرقم القومي يتكون من 14 رقمًا فقط
            ],
            'degree' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email|unique:doctors,email',
            'password' => [
                'required',
                'string',
                'min:8', // تحقق من أن كلمة المرور تحتوي على الأقل على 8 أحرف
               // 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/u', // قواعد قوة كلمة المرور
            ],
        ];
    }
}
