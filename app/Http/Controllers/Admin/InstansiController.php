<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Instansi;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\instansi\InstansiCreateRequest;
use App\Http\Requests\Admin\instansi\InstansiUpdateRequest;
use Storage;

class InstansiController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $instansi = Instansi::where('title', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $instansi = Instansi::latest()->paginate($perPage);
        }

        return view('admin.instansi.index', compact('instansi'));
    }

    public function create()
    {
        return view('admin.instansi.create');
    }

    public function store(InstansiCreateRequest $request)
    {
        Instansi::create($request->getValidRequest());

        return redirect('admin/instansi')->with('flash_message', 'Instansi added!');
    }

    public function show($id)
    {
        $data['instansi'] = Instansi::findOrFail($id);

        return view('admin.instansi.show', $data);
    }

    public function edit($id)
    {
        $data['instansi'] = Instansi::findOrFail($id);

        return view('admin.instansi.edit', $data);
    }

    public function update(InstansiUpdateRequest $request, $id)
    {
        $instansi = Instansi::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('/public/upload/instansi/'.$instansi->image);
        }
        $instansi->update($request->getValidRequest());

        return redirect('admin/instansi')->with('flash_message', 'Instansi updated!');
    }

    public function destroy($id)
    {
        $data = Instansi::find($id);
        Storage::delete('/public/upload/instansi/'.$data->image);
        Instansi::destroy($id);

        return redirect('admin/instansi')->with('flash_message', 'Instansi deleted!');
    }
}
