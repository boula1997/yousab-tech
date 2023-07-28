<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $rules= [
            'name'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'=>'required|email',
            'message'=>'required',
        ];

        return $rules;
    }

    public function messages(){
        $messages=[  
        'name.required'=>'الاسم مطلوب',
        'phone.required'=>'الهاتف مطلوب',
        'phone.regex'=>'صيغة رقم الهاتف غير صحيحة',
        'phone.min'=>'رقم الهاتف يجب ان يكون 10 ارقام علي الاقل',
        'email.required'=>'البريد الالكتروني مطلوب',
        'email.email'=>'صيغة البريد الالكتروني خاطئة',
        'message.required'=>'الرسالة مطلوبة',];

        return $messages;

    }
}
