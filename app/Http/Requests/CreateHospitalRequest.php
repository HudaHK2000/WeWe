<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHospitalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'about' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'status' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'الاسم مطلوب',
        ];
    }
}
