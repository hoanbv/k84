<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
                "full"=>"required|min:3",
                "phone"=>"required|numeric",
                "address"=>"required",
                "id_number"=>"required"
            
        ];
    }
    public function messages()
    {
        return[
            "full.required"=>"Khong duoc de trong Ho va Ten",
            "full.min"=>"Khong duoc nho hon 3 ky tu",
            "phone.required"=>"Khong duoc de trong SDT",
            "phone.numeric"=>"SDT phai la so",
            "address.required"=>"Khong duoc de trong Dia chi",
            "id_number.required"=>"Khong duoc de trong CMT"

        ];;
    }
}
