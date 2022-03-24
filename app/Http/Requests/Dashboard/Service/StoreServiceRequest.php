<?php

namespace App\Http\Requests\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'title' => [
                'required', 'string', 'max:255' 
            ],
            'description' => [
                'nullable', 'string', 'max:5000' 
            ],
            'deivery_time' => [
                'required', 'integer', 'max:100' 
            ],
            'revision_time' => [
                'required', 'integer', 'max:100' 
            ],
            'price' => [
                'required', 'string'
            ],
            'note' => [
                'nullable', 'string', 'max:5000'
            ],
        ];
    }
}
