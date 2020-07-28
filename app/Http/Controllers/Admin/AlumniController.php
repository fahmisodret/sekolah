<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Alumnus;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Alumni\AlumniCreateRequest;
use App\Http\Requests\Admin\Alumni\AlumniUpdateRequest;

class AlumniController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $alumni = Alumnus::where('nama', 'LIKE', "%$keyword%")
                ->orWhere('jk', 'LIKE', "%$keyword%")
                ->orWhere('tgl_lahir', 'LIKE', "%$keyword%")
                ->orWhere('thn_lulus', 'LIKE', "%$keyword%")
                ->orWhere('nis', 'LIKE', "%$keyword%")
                ->orWhere('alamat', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('telepon', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $alumni = Alumnus::latest()->paginate($perPage);
        }

        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('admin.alumni.create');
    }

    public function store(AlumnusCreateRequest $request)
    {
        Alumnus::create($request->getValidRequest());

        return redirect('admin/alumni')->with('flash_message', 'Alumnus added!');
    }

    public function show($id)
    {
        $data['alumnus'] = Alumnus::findOrFail($id);

        return view('admin.alumni.show', $data);
    }

    public function edit($id)
    {
        $data['alumnus'] = Alumnus::findOrFail($id);

        return view('admin.alumni.edit', $data);
    }

    public function update(AlumnusUpdateRequest $request, $id)
    {
        $alumnus = Alumnus::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$alumnus->image);
        }
        $alumnus->update($request->getValidRequest());

        return redirect('admin/alumni')->with('flash_message', 'Alumnus updated!');
    }

    public function destroy($id)
    {
        // $data = Alumnus::find($id);
        // Storage::delete('path to folder'.$data->image);
        Alumnus::destroy($id);

        return redirect('admin/alumni')->with('flash_message', 'Alumnus deleted!');
    }
}
