<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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


    public function messages()
    {
        return [
            'title.required' => 'Заголовок обязателен к заполнению!',
            'title.max' => 'Заголвок должен быть не менее 50 символов!',
            'content.required' => 'Контент обязателен к заполнению!',
            'content.min' => 'Содержание должно быть не менее 20 символов!',
           
        ];  
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string', 'min:20'],
            // 'creator_id' => ['required', 'numeric'],
            // 'status_id' => ['required', 'numeric'] 
        ];
    }
}
