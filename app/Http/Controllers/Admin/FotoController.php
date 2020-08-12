<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Foto;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\foto\FotoCreateRequest;
use App\Http\Requests\Admin\foto\FotoUpdateRequest;
use Storage;

class FotoController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $foto = Foto::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $foto = Foto::latest()->paginate($perPage);
        }

        return view('admin.foto.index', compact('foto'));
    }

    public function create()
    {
        return view('admin.foto.create');
    }

    public function store(FotoCreateRequest $request)
    {
        Foto::create($request->getValidRequest());

        return redirect('admin/foto')->with('flash_message', 'Foto added!');
    }

    public function show($id)
    {
        $data['foto'] = Foto::findOrFail($id);

        return view('admin.foto.show', $data);
    }

    public function edit($id)
    {
        $data['foto'] = Foto::findOrFail($id);

        return view('admin.foto.edit', $data);
    }

    public function update(FotoUpdateRequest $request, $id)
    {
        $foto = Foto::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('/public/upload/foto/'.$foto->image);
        }
        $foto->update($request->getValidRequest());

        return redirect('admin/foto')->with('flash_message', 'Foto updated!');
    }

    public function destroy($id)
    {
        $data = Foto::find($id);
        Storage::delete('/public/upload/foto/'.$data->image);
        Foto::destroy($id);

        return redirect('admin/foto')->with('flash_message', 'Foto deleted!');
    }
}
