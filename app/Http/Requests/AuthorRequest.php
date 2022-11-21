<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{ /**
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
            'nameAuthor'=> 'required',
            'publishing'=> 'required',
            'gender'=> 'required',
            'country'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'dob'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'about'=> 'required',
            'image'=> 'required',
        ];
    }


    public function massages()
    {
        return [
            'nameAuthor.required'=> 'name Author is reuierd',
            'publishing.required'=> 'Publishing house is reuierd',
            'gender.required'=> 'gender Author is reuierd',
            'country.required'=> 'country is reuierd',
            'city.required'=> 'city is reuierd',
            'address.required'=> 'address is reuierd',
            'dob.required'=> 'date of birthday is reuierd',
            'email.required'=> 'email is reuierd',
            'phone.required'=> 'phone is reuierd',
            'about.required'=> 'about is reuierd',
            'image.required'=> 'image is reuierd',      

              ];
    }
}
