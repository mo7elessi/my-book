<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class publishingHouseRequest extends FormRequest
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
            'publisher'=> 'required',
            'founder'=> 'required',
            'phone' => 'required',
            'country' => 'required',
            'headquarters' => 'required',
            'yeaounded' => 'required',
            'image' => 'required',
            'about' => 'required'
        ];
    }


    public function massages()
    {
        return [
            'publisher.required'=> 'name is reuierd',
            'founder.required'=> 'founder is reuierd',
            'phone.required'=> 'phone is requierd',
            'country.required'=> 'you must choose a country',
            'headquarters.required'=> 'headquarters is reuierd',
            'yeaounded.required'=> 'year founded is reuierd',
            'about.required'=> 'about is reuierd',
            'image.required'=> 'logo is reuierd',
            //
        ];
    }
}
