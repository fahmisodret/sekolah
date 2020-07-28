<?php

namespace App\Http\Requests\Admin\Karyawan;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;
use Str;

class KaryawanUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
