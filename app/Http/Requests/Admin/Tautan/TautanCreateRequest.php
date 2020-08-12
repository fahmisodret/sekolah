<?php

namespace App\Http\Requests\Admin\Tautan;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;

class TautanCreateRequest extends FormRequest
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
            'url' => $this->input('url'),
        ];
    }
}
