<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'title.string' => 'Заголвок должен быть строкой!',
            'content.required' => 'Контент обязателен к заполнению!',
            'content.min' => 'Содержание должно быть не менее 20 символов!',
            'content.string' => 'Контент должен быть строкой!',
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
            // 'creator_id' => [
            //     'nullable',
            //     'numeric',
            //     'exists:tasks,id',
            // ],
            // 'status_id' => ['nullable', 'integer', 'exists:tasks, id'],
            // 'updated_at' => ['required', 'numeric'],
            // 'status_id' => ['required', 'numeric'] 
        ];
    }
}
