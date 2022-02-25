<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddModelRequest extends FormRequest
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
            'model_file'=>'required|',
            'description'=>'required|max:500',
            'name'=>'required',
            'price'=>'required|integer',
            'tags'=>'required',
            'images'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'images' => 'max:5',
        ];
    }
}
