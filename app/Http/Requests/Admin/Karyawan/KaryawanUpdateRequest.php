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
        return true;
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

    /**
     * Valid request
     * @return array
     */
    public function getValidRequest()
    {
        return [
            'nama' => $this->input('nama'),
            'nik' => $this->input('nik'),
            'jk' => $this->input('jk'),
            'tempat_lahir' => $this->input('tempat_lahir'),
            'tgl_lahir' => $this->input('tgl_lahir'),
            'grade' => $this->input('grade'),
            'image' => $this->file('image'),
            'is_show' => $this->input('is_show'),
            'message' => $this->input('message'),
        ];
    }
}
