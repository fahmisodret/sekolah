<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\kegiatan\KegiatanCreateRequest;
use App\Http\Requests\Admin\kegiatan\KegiatanUpdateRequest;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $kegiatan = Kegiatan::where('title', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kegiatan = Kegiatan::latest()->paginate($perPage);
        }

        return view('admin.kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('admin.kegiatan.create');
    }

    public function store(KegiatanCreateRequest $request)
    {
        Kegiatan::create($request->getValidRequest());

        return redirect('admin/kegiatan')->with('flash_message', 'Kegiatan added!');
    }

    public function show($id)
    {
        $data['kegiatan'] = Kegiatan::findOrFail($id);

        return view('admin.kegiatan.show', $data);
    }

    public function edit($id)
    {
        $data['kegiatan'] = Kegiatan::findOrFail($id);

        return view('admin.kegiatan.edit', $data);
    }

    public function update(KegiatanUpdateRequest $request, $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$kegiatan->image);
        }
        $kegiatan->update($request->getValidRequest());

        return redirect('admin/kegiatan')->with('flash_message', 'Kegiatan updated!');
    }

    public function destroy($id)
    {
        // $data = Kegiatan::find($id);
        // Storage::delete('path to folder'.$data->image);
        Kegiatan::destroy($id);

        return redirect('admin/kegiatan')->with('flash_message', 'Kegiatan deleted!');
    }
}
