<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
 
    public function rules()
    {
        //to add or remove input from request in validation class use $this->merge
        //  $this->merge(['user_id' => auth('api')->user()->id]);


        $image = request()->isMethod('put') ? 'nullable' : 'required';
        $rules = [
            'image' =>  $image ,
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required']];
        }
        return  $rules;
    }
    public function messages()
    {
        $messages = [
            'image.required' => trans('requests.image_required'),
        ];
        foreach (config('translatable.locales') as $locale) {
            $messages += [$locale . '.title.required' => trans('requests.title_required_' . $locale)];
            $messages += [$locale . '.description.required' => trans('requests.desc_required_' . $locale)];
        }
        return $messages;
    }

}
