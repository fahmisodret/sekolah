<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Tautan;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\tautan\TautanCreateRequest;
use App\Http\Requests\Admin\tautan\TautanUpdateRequest;

class TautanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tautan = Tautan::where('title', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tautan = Tautan::latest()->paginate($perPage);
        }

        return view('admin.tautan.index', compact('tautan'));
    }

    public function create()
    {
        return view('admin.tautan.create');
    }

    public function store(TautanCreateRequest $request)
    {
        Tautan::create($request->getValidRequest());

        return redirect('admin/tautan')->with('flash_message', 'Tautan added!');
    }

    public function show($id)
    {
        $data['tautan'] = Tautan::findOrFail($id);

        return view('admin.tautan.show', $data);
    }

    public function edit($id)
    {
        $data['tautan'] = Tautan::findOrFail($id);

        return view('admin.tautan.edit', $data);
    }

    public function update(TautanUpdateRequest $request, $id)
    {
        $tautan = Tautan::findOrFail($id);
        if($request->hasFile('image')){
            Storage::delete('path to folder'.$tautan->image);
        }
        $tautan->update($request->getValidRequest());

        return redirect('admin/tautan')->with('flash_message', 'Tautan updated!');
    }

    public function destroy($id)
    {
        // $data = Tautan::find($id);
        // Storage::delete('path to folder'.$data->image);
        Tautan::destroy($id);

        return redirect('admin/tautan')->with('flash_message', 'Tautan deleted!');
    }
}
