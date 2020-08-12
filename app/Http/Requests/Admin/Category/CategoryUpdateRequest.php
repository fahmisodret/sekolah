<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;
use Str;

class CategoryUpdateRequest extends FormRequest
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
            'image.required' => 'Image is required!', 
            'image.file' => 'Image is not file!', 
            'image.max' => 'Image max is 3mb!', 
            'image.mimes' => 'Image type valid is "jpeg,png,jpg,gif,svg"!', 
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
            'image' =>$this->file('image'),
            'content' => $this->input('content'),
        ];
    }
}
