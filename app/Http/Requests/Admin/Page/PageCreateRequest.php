<?php

namespace App\Http\Requests\Admin\Page;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;
use Str;

class PageCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required',
        ];
    }

    /**
     * Custom message for validation
     * @return array
     */
    public function messages()
    {
        return [
            'title' => 'title is required!',
            'content' => 'Content is required!',
        ];
    }

    /**
     * Valid request
     * @return array
     */
    public function getValidRequest()
    {
        return [
            'title' => $this->input('title'),
            'slug' => Str::slug($this->input('title')),
            'content' => $this->input('content'),
        ];
    }
}