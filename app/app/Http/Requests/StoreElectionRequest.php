<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreElectionRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'options' => 'required',
            'voters' => 'required|mimes:csv,txt|max:2048',
            'candidates' => 'required|mimes:csv,txt|max:2048',
        ];
    }
}
