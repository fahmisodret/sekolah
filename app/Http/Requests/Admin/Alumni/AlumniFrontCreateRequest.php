<?php

namespace App\Http\Requests\Admin\Alumni;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;
use Str;

class AlumniFrontCreateRequest extends FormRequest
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
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
            'thn_lulus' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            // 'email' => 'required',
            'telepon' => 'required',
            'phone' => 'required',
            'image' => 'required',
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
            'jk' => $this->input('jk'),
            'tgl_lahir' => $this->input('tgl_lahir'),
            'thn_lulus' => $this->input('thn_lulus'),
            'nis' => $this->input('nis'),
            'alamat' => $this->input('alamat'),
            'email' => $this->input('email'),
            'telepon' => $this->input('telepon'),
            'phone' => $this->input('phone'),
            'image' => $this->file('image'),
        ];
    }
}
