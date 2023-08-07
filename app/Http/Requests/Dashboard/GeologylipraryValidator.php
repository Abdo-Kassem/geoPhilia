<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class GeologylipraryValidator extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fileName' => 'required',
            'comment' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'fileName.required' => ' الملف  مطلوب',
            'comment.required' => 'التعليق مطلوب',
        ];
    }
}
