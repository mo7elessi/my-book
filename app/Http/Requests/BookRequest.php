<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'nameBook'=> 'required',
            'nameAuthor'=> 'required',
            'category'=> 'required',
            'isbn'=> 'required',
            'yor'=> 'required',
            'numberPage'=> 'required',
            'language'=> 'required',
            'desc'=> 'required',
            'image'=> 'required',
        ];
    }

    public function massages()
    {
        return [
            'nameBook.required'=> 'name Book is reuierd',
            'nameAuthor.required'=> 'Publishing house is reuierd',
            'isbn.required'=> 'isbn is reuierd',
            'category.required'=> 'country is reuierd',
            'yor.required'=> 'yeat of release is reuierd',
            'numberPage.required'=> 'Number Page is reuierd',
            'language.required'=> 'language is reuierd',
            'desc.required'=> 'description is reuierd',
            'image.required'=> 'image book is reuierd',      

              ];
    }
}
