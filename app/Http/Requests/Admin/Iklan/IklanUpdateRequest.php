<?php

namespace App\Http\Requests\Admin\Iklan;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;

class IklanUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required',
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
            'image' => $this->file('image'),
            'url' => $this->input('url'),
        ];
    }
}
