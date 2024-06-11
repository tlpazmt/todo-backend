<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DestroyTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return Auth::id() === $this->task->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [];
    }
}
