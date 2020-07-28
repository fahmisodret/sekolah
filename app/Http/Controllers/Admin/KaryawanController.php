<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Karyawan\KaryawanCreateRequest;
use App\Http\Requests\Admin\Karyawan\KaryawanUpdateRequest;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $karyawan = Karyawan::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('nik', 'LIKE', "%$keyword%")
                ->orWhere('jk', 'LIKE', "%$keyword%")
                ->orWhere('tempat_lahir', 'LIKE', "%$keyword%")
                ->orWhere('tgl_lahir', 'LIKE', "%$keyword%")
                ->orWhere('grade', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $karyawan = Karyawan::latest()->paginate($perPage);
        }

        return view('admin.karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view('admin.karyawan.create');
    }

    public function store(KaryawanCreateRequest $request)
    {
        Karyawan::create($request->getValidRequest());

        return redirect('admin/karyawan')->with('flash_message', 'Karyawan added!');
    }

    public function show($id)
    {
        $data['karyawan'] = Karyawan::findOrFail($id);

        return view('admin.karyawan.show', $data);
    }

    public function edit($id)
    {
        $data['karyawan'] = Karyawan::findOrFail($id);

        return view('admin.karyawan.edit', $data);
    }

    public function update(KaryawanUpdateRequest $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$karyawan->image);
        }
        $karyawan->update($request->getValidRequest());

        return redirect('admin/karyawan')->with('flash_message', 'Karyawan updated!');
    }

    public function destroy($id)
    {
        // $data = Karyawan::find($id);
        // Storage::delete('path to folder'.$data->image);
        Karyawan::destroy($id);

        return redirect('admin/karyawan')->with('flash_message', 'Karyawan deleted!');
    }
}
