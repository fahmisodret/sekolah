<?php

namespace App\Http\Requests\Admin\Kegiatan;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Input;

class KegiatanCreateRequest extends FormRequest
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
            'keterangan' => 'required',
            'icon' => 'required',
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
            'keterangan' => $this->input('keterangan'),
            'icon' => $this->input('icon'),
        ];
    }
}
