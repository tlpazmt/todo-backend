<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'title' => 'string|max:255',
            'description' => 'string',
            'status_id' => 'exists:statuses,id',
            'priority_id' => 'exists:priorities,id',
        ];
    }
}
