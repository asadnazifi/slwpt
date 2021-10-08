<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' =>'required' ,
            'Email' =>'required|email',
            'Password'=>'required|min:6|max:12',
        ];
        if(request()->route('user_id') && intval(request()->route('user_id'))>0){
            unset($rules['Password']);
        }
        return $rules;
    }
    public function messages()
    {
       return[
                 'name.required'=>'لطفا نام خود را وارد کنید.',
        ];
    }
}
