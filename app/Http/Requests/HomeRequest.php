<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'nameCategory'=> 'required|string',
            'desc'=> 'required|string',
            
        ];
    }


    public function massages()
    {
        return [
            'nameCategory.required'=> 'Category Name is reuierd',
            'nameCategory.string'=> 'Category Name must be string',
            'desc.required'=> 'description is reuierd',
            'desc.string'=> 'descriptions must be string',
            
        ];
    }
}
